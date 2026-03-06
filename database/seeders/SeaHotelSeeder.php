<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
            'gelendzik' => [
                'database/seeders/hotels/gelendzik/gostevoi-dom-asiiat/rez.php',
                'database/seeders/hotels/gelendzik/gostevoi-dom-viktoriia/rez.php',
                'database/seeders/hotels/gelendzik/gostinica-ckazka-na-more/rez.php',
                'database/seeders/hotels/gelendzik/gostinica-iz-sruba-sosnovyi-bor/rez.php',
                'database/seeders/hotels/gelendzik/mini-otel-roza/rez.php',
                'database/seeders/hotels/gelendzik/pansionat-kuban/rez.php',
            ],
            'lermontovo' => [
                'database/seeders/hotels/lermontovo/avtorskii-otel-esenin/rez.php',
                'database/seeders/hotels/lermontovo/baza-otdyxa-u-moria-lermontovo/rez.php',
                'database/seeders/hotels/lermontovo/gostinica-biriuza/rez.php',
                'database/seeders/hotels/lermontovo/otel-granat/rez.php',
            ],
            'novomixailovskii' => [
                'database/seeders/hotels/novomixailovskii/gostinicnyi-kompleks-tornado/rez.php',
            ],
            'dederkoi' => [
                'database/seeders/hotels/dederkoi/gostinica-primorskaia-rakuska/rez.php',
            ],
            'lazarevskoe' => [
                'database/seeders/hotels/lazarevskoe/gostevoi-dom-gorizont/rez.php',
                'database/seeders/hotels/lazarevskoe/gostevoi-dom-more-gory/rez.php',
                'database/seeders/hotels/lazarevskoe/gostinica-terracotta/rez.php',
            ],
            // 'adler' => [
            //     'database/seeders/hotels/adler/azimut-hotel-sochi-3/rez.php',
            //     'database/seeders/hotels/adler/barxatnye-sezony-gorod-otel/rez.php',
            // ],
            'primorskii' => [
                'database/seeders/hotels/primorskii/baza-otdyxa-u-moria-feodosiia-p-primorskii/rez.php',
                'database/seeders/hotels/primorskii/villa-nimfei/rez.php',
                'database/seeders/hotels/primorskii/villa-nimfei-2/rez.php',
            ],
            'beregovoe' => [
                'database/seeders/hotels/beregovoe/gostinica-solnecnyi-bereg/rez.php',
            ],
            'feodosiia' => [
                'database/seeders/hotels/feodosiia/baza-otdyxa-svetlaia/rez.php',
                'database/seeders/hotels/feodosiia/pansionat-feodosiia/rez.php',
            ],
            'koktebel' => [
                'database/seeders/hotels/koktebel/baza-otdyxa-andre/rez.php',
                'database/seeders/hotels/koktebel/kottedznyi-poselok-dim-2/rez.php',
            ],
            'kurortnoe' => [
                'database/seeders/hotels/kurortnoe/otel-aravana/rez.php',
            ],
            'sudak' => [
                'database/seeders/hotels/sudak/gostevoi-dom-otdyx/rez.php',
                'database/seeders/hotels/sudak/otel-diva/rez.php',
            ],
            'morskoe' => [
                'database/seeders/hotels/morskoe/mini-otel-morskoi/rez.php',
            ],
        ];

        // Загружаем данные из каждого файла
        foreach ($hotelFiles as $resortSlug => $files) {
            echo "\nProcessing resort: {$resortSlug}\n";
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
                    echo "\nCould not find destination or resort for: {$data['slug']} {$data['direction']}\n";

                    continue;
                }

                // Копируем фото в storage
                $imgDir = dirname($fullPath);
                $copiedImages = $this->copyHotelImages($imgDir, $data['slug'], $data['images'] ?? []);

                $hotel = [
                    'sea_destination_id' => $destinationId,
                    'sea_resort_id' => $resortId,
                    'title' => $data['title'],
                    'slug' => $data['slug'],
                    'geo' => $data['geo'] ?? null,
                    'bus_direction' => $data['direction'] ?? null,
                    'sea_distantion' => $data['sea_distantion'] ?? null,
                    'numbers_type' => $data['numbers_type'] ?? null,
                    'min_price' => $this->parsePrice($data['min_price'] ?? null),
                    'short_description' => $data['short_description'] ?? null,
                    'gallery' => $this->encodeJson($copiedImages),
                    'parameters' => $this->encodeJson($data['base_description'] ?? []),
                    'before_5_price' => $this->parsePrice($data['before_5_price'] ?? null),
                    'before_12_price' => $this->parsePrice($data['before_12_price'] ?? null),
                    'number_prices' => $this->encodeJson($data['numbers'] ?? []),
                    'img' => reset($copiedImages) ?: null,
                    'in_price' => $data['in_price'] ?? null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $seo = [
                    'slug' => $data['slug'],
                    'resort' => $data['resort'] ?? null,
                    'seo_title' => $data['seo_title'] ?? null,
                    'seo_description' => $data['seo_description'] ?? null,
                ];

                $hotels[] = $hotel;
                $seos[] = $seo;
                echo "Loaded: {$hotel['title']}";
            }
        }

        // Вставляем все отели в таблицу
        if (! empty($hotels)) {
            DB::table('sea_hotels')->insert($hotels);
            echo 'Inserted '.count($hotels).' hotels';

            foreach ($seos as $hotel) {
                DB::table('seo_data')->updateOrInsert(
                    ['url' => 'tury-na-more/'.Str::slug($hotel['resort']).'/'.$hotel['slug']],
                    [
                        'url' => 'tury-na-more/'.Str::slug($hotel['resort']).'/'.$hotel['slug'],
                        'seo_title' => $hotel['seo_title'] ?? 'Страницы',
                        'seo_description' => $hotel['seo_description'] ?? 'Страницы',
                    ]
                );
            }
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
            'gelendzik' => 'gelendzik',
            'lermontovo' => 'lermontovo',
            'novomixailovskii' => 'novomixailovskii',
            'dederkoi' => 'dederkoi',
            'lazarevskoe' => 'lazarevskoe',
            'adler' => 'adler',
            'primorskii' => 'primorskii',
            'beregovoe' => 'beregovoe',
            'feodosiia' => 'feodosiia',
            'koktebel' => 'koktebel',
            'kurortnoe' => 'kurortnoe',
            'sudak' => 'sudak',
            'morskoe' => 'morskoe',
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
     * Получить первое изображение из галереи
     */
    private function getFirstImageFromGallery(?array $gallery): ?string
    {
        if (empty($gallery) || ! is_array($gallery)) {
            return null;
        }

        // Если это массив со строками (пути)
        if (is_string($gallery[0])) {
            return $gallery[0];
        }

        // Если это массив ассоциативный с ключами (например, 'filename', 'url')
        if (isset($gallery[0]) && is_array($gallery[0])) {
            // Ищем поле с названием фото (filename, url, image, img и т.д.)
            foreach (['filename', 'url', 'image', 'img', 'path'] as $key) {
                if (isset($gallery[0][$key])) {
                    return $gallery[0][$key];
                }
            }

            // Если это ассоциативный массив, берём первое значение
            return reset($gallery[0]);
        }

        return null;
    }

    /**
     * Копировать фото отеля из seeders в storage
     */
    private function copyHotelImages(string $imgDir, string $hotelSlug, ?array $images = []): array
    {
        if (empty($images) || ! is_array($images)) {
            return [];
        }

        $sourceDir = $imgDir.'/img';
        if (! File::isDirectory($sourceDir)) {
            return [];
        }

        // Создаём папку для всех отелей в storage (без подпапок)
        $fullStoragePath = storage_path('app/public/sea-hotels');
        File::makeDirectory($fullStoragePath, 0755, true, true);

        $copiedImages = [];

        // Копируем все фото с префиксом
        foreach ($images as $image) {
            if (is_string($image)) {
                $sourceFile = $sourceDir.'/'.$image;

                if (File::exists($sourceFile)) {
                    // Добавляем префикс к имени файла
                    $newFileName = $hotelSlug.'_'.$image;
                    $destFile = $fullStoragePath.'/'.$newFileName;

                    File::copy($sourceFile, $destFile);

                    // Сохраняем путь для storage
                    $copiedImages[] = '/storage/sea-hotels/'.$newFileName;
                }
            }
        }

        return $copiedImages;
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
