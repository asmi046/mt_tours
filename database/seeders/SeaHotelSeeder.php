<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SeaHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sea_hotels')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $hotels = [];

        // Массив путей к файлам rez.php
        $hotelFiles = [
            'anapa' => [
                'database/seeders/hotels/anapa/belyi-lebed-baza-otdyxa/rez.php',
                'database/seeders/hotels/anapa/gostevoi-dom-afalina/rez.php',
                'database/seeders/hotels/anapa/ispanskii-dvorik-gostevoi-dom/rez.php',
                'database/seeders/hotels/anapa/mini-otel-skazka/rez.php',
                'database/seeders/hotels/anapa/otel-34/rez.php',
                'database/seeders/hotels/anapa/otel-atlantida/rez.php',
            ],
            'kabardinka' => [
                'database/seeders/hotels/kabardinka/otel-morskaia-zvezda/rez.php',
                'database/seeders/hotels/kabardinka/sanatorii-zemcuzina-u-moria/rez.php',
            ],
        ];

        // Загружаем данные из каждого файла
        foreach ($hotelFiles as $resortSlug => $files) {
            foreach ($files as $filePath) {
                $fullPath = base_path($filePath);

                if (! File::exists($fullPath)) {
                    echo "File not found: {$filePath}";

                    continue;
                }

                // Загружаем файл и извлекаем переменную
                $data = $this->loadHotelData($fullPath);

                if (! $data) {
                    continue;
                }

                // Получаем IDs из базы данных
                $destinationId = $this->getDestinationId($data['direction']);
                $resortId = $this->getResortId($resortSlug);

                if (! $destinationId || ! $resortId) {
                    echo "Could not find destination or resort for: {$data['slug']}";

                    continue;
                }

                $hotel = [
                    'sea_destination_id' => $destinationId,
                    'sea_resort_id' => $resortId,
                    'title' => $data['resort'].' - '.$this->extractHotelName($data['slug']),
                    'slug' => $data['slug'],
                    'gallery' => $this->encodeJson($data['images'] ?? []),
                    'parameters' => $this->encodeJson($data['base_description'] ?? []),
                    'before_5_price' => $this->parsePrice($data['before_5_price'] ?? null),
                    'before_12_price' => $this->parsePrice($data['before_12_price'] ?? null),
                    'number_prices' => $this->encodeJson($data['numbers'] ?? []),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $hotels[] = $hotel;
                echo "Loaded: {$hotel['title']}";
            }
        }

        // Вставляем все отели в таблицу
        if (! empty($hotels)) {
            DB::table('sea_hotels')->insert($hotels);
            echo 'Inserted '.count($hotels).' hotels';
        }
    }

    /**
     * Загрузить данные отеля из rez.php файла
     */
    private function loadHotelData(string $filePath): ?array
    {
        try {
            include $filePath;

            // Переменная будет иметь имя соответствующее slug
            $varName = null;
            foreach (get_defined_vars() as $key => $value) {
                if (is_array($value) && isset($value['slug'])) {
                    $varName = $key;
                    break;
                }
            }

            if ($varName) {
                return $$varName;
            }

            return null;
        } catch (\Exception $e) {
            echo "Error loading file {$filePath}: ".$e->getMessage();

            return null;
        }
    }

    /**
     * Получить ID направления по названию
     */
    private function getDestinationId(string $direction): ?int
    {
        // Маппинг направлений
        $directionMap = [
            'Курск - Анапа' => 'krasnodarskiy-kray',
            'Курск - Лазаревское' => 'krasnodarskiy-kray',
            'Курск - Крым' => 'crimea',
        ];

        $slug = $directionMap[$direction] ?? null;
        if (! $slug) {
            return null;
        }

        return DB::table('sea_destinations')
            ->where('slug', $slug)
            ->value('id');
    }

    /**
     * Получить ID курорта по slug
     */
    private function getResortId(string $slug): ?int
    {
        $resortMap = [
            'anapa' => 'anapa',
            'kabardinka' => 'kabardinka',
            'gelendzhik' => 'gelendzhik',
        ];

        $resortSlug = $resortMap[$slug] ?? $slug;

        return DB::table('sea_resorts')
            ->where('slug', $resortSlug)
            ->value('id');
    }

    /**
     * Извлечь имя отеля из slug
     */
    private function extractHotelName(string $slug): string
    {
        return ucfirst(str_replace('-', ' ', $slug));
    }

    /**
     * Преобразовать строку цены в число
     */
    private function parsePrice(?string $price): ?float
    {
        if (! $price) {
            return null;
        }

        // Убираем валюту, пробелы и преобразуем в число
        $cleaned = preg_replace('/[^\d.,]/', '', $price);
        $cleaned = str_replace(',', '.', $cleaned);

        return (float) $cleaned ?: null;
    }

    /**
     * Безопасно кодирует данные в JSON для JSON-колонок MySQL.
     */
    private function encodeJson($value): ?string
    {
        $prepared = $this->utf8ize($value);

        try {
            return json_encode($prepared, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            echo 'JSON encode error: '.$e->getMessage();

            return null;
        }
    }

    /**
     * Рекурсивно приводит строки к UTF-8, чтобы json_encode не падал.
     */
    private function utf8ize($mixed)
    {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = $this->utf8ize($value);
            }

            return $mixed;
        }

        if (is_string($mixed) && ! mb_check_encoding($mixed, 'UTF-8')) {
            return mb_convert_encoding($mixed, 'UTF-8', 'UTF-8');
        }

        return $mixed;
    }
}
