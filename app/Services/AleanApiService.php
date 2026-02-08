<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class AleanApiService
{
    protected string $baseUrl;

    protected string $apiKey;

    protected string $apiSecret;

    public function __construct()
    {
        $this->baseUrl = config('alean.base_url');
        $this->apiKey = config('alean.api_key');
        $this->apiSecret = config('alean.api_secret');
    }

    public function getCountries(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetCountries');

        return $response->body();
    }

    public function getResorts(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetResorts');

        return $response->body();
    }

    public function getHotels(): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetHotels');

        return $response->body();
    }

    public function getHotelDescription(int $id): string
    {
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl.'?action=GetHotelDescription&id='.$id);

        return $response->body();
    }

    private function processHotelImages(array $imageList): array
    {
        $gallery = [];
        $firstImg = null;

        foreach ($imageList as $index => $image) {
            try {
                // Берём имя файла из URL и меняем расширение на .webp
                $originalFileName = basename(parse_url($image['Url'], PHP_URL_PATH));
                $fileNameWithoutExt = pathinfo($originalFileName, PATHINFO_FILENAME);
                $fileName = 'alean-sea-hotels/'.$fileNameWithoutExt.'.webp';

                // Проверяем наличие файла в хранилище
                if (! Storage::disk('public')->exists($fileName)) {
                    // Скачиваем изображение
                    $imageContent = Http::get($image['Url'])->body();

                    // Уменьшаем размер и сжимаем изображение в WebP
                    $img = Image::read($imageContent)
                        ->scale(width: 1280) // Ограничиваем ширину до 1280px
                        ->toWebp(75);

                    // Сохраняем в хранилище
                    Storage::disk('public')->put($fileName, (string) $img);

                    // Освобождаем память
                    unset($imageContent, $img);
                }

                // Создаём массив для галереи
                $galleryItem = [
                    'img' => Storage::url($fileName),
                    'title' => $image['Description'] ?? 'Изображение отеля',
                ];

                $gallery[] = $galleryItem;

                // Первое изображение для основной картинки
                if ($index === 0) {
                    $firstImg = Storage::url($fileName);
                }
            } catch (\Exception $e) {
                // Логируем ошибку при скачивании, но продолжаем
                continue;
            }
        }

        return [
            'gallery' => $gallery,
            'img' => $firstImg,
        ];
    }

    private function getDistanceToBeach(array $distanceList): ?string
    {
        foreach ($distanceList as $distance) {
            if (isset($distance['Name']) && $distance['Name'] === 'до моря') {
                return $distance['Distance'] ?? null;
            }
        }

        return null;
    }

    public function getHotelStructuresDescription(array $alean_data, int $resortId, string $sea_destination_id, string $bus_schedule): array
    {
        $structures = [];
        $structures['sea_resort_id'] = $resortId;
        $structures['sea_destination_id'] = $sea_destination_id;
        $structures['CID'] = $alean_data['CID'];
        $structures['bus_direction'] = $bus_schedule;
        $structures['title'] = $alean_data['HotelName'] ?? 'Отель';
        $structures['slug'] = Str::slug($alean_data['HotelName'] ?? 'Отель');
        $structures['geo'] = '['.$alean_data['Coordinates']['Latitude'].', '.$alean_data['Coordinates']['Longitude'].']';
        $structures['sort_order'] = 0;
        $structures['description'] = $alean_data['Description'] ?? null;
        $structures['short_description'] = $alean_data['Description'] ?? null;
        $structures['in_price'] = $alean_data['PriceIncludes'] ?? null;
        $structures['numbers_type'] = 'Доступно '.count($alean_data['RoomCategoryList'] ?? []).' типов номеров';
        $structures['sea_distantion'] = isset($alean_data['DistanceList'])
            ? $this->getDistanceToBeach($alean_data['DistanceList']).' м до моря'
            : null;

        // Обрабатываем изображения
        if (isset($alean_data['HotelImageList']) && is_array($alean_data['HotelImageList'])) {
            $imageData = $this->processHotelImages($alean_data['HotelImageList']);
            $structures['gallery'] = json_encode($imageData['gallery']);
            $structures['img'] = $imageData['img'];
        }

        return $structures;
    }

    public function getTours(string $resortId = '18', string $dateFromTo = '09.06.2026'): string
    {
        // dd($this->apiKey, $this->apiSecret, $this->baseUrl);
        $response = Http::withBasicAuth($this->apiKey, $this->apiSecret)
            ->timeout(180)
            ->withHeader('Accept', 'application/json')
            ->get($this->baseUrl,
                [
                    'action' => 'GetTours',
                    'countryId' => 1, // ID России
                    'resorts' => $resortId, // ID Анапы
                    'dateFrom' => $dateFromTo,
                    'dateTo' => $dateFromTo,
                    'adults' => 2,
                    'kids' => 0,
                    'nightsMin' => 9,
                    'nightsMax' => 9,
                    'count' => 10000,
                    'currencyCode' => 'RUB',
                ]
            );

        return $response->body();
    }
}
