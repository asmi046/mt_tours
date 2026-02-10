<?php

namespace App\Services;

use App\Models\AleanSeaHotel;
use App\Models\SeaHotel;
use App\Models\SeaResort;
use Illuminate\Pagination\LengthAwarePaginator;

class SeaDataService
{
    public function getAllResorts()
    {
        $resorts = SeaResort::with('destination')->get()->groupBy('destination.title');

        return $resorts;
    }

    public function getHotelGeoPoint()
    {
        $all_hotels = SeaHotel::all();
        $result = [];
        foreach ($all_hotels as $hotel) {
            $result[] = [
                'id' => $hotel->id,
                'title' => $hotel->title,
                'img' => $hotel->img,
                'geo' => $hotel->geo,
                'link' => route('sea_hotel', ['hotel' => $hotel->slug, 'resort' => $hotel->resort->slug]),
            ];
        }

        return $result;
    }

    public function getAllHotels($resortId = null, $perPage = 30)
    {
        $page = request()->get('page', 1);

        // Если resortId не передан - получаем все отели, иначе только по курорту
        if ($resortId) {
            $seaHotels = SeaHotel::where('sea_resort_id', $resortId)->get();
            $aleanHotels = AleanSeaHotel::where('sea_resort_id', $resortId)->get();
        } else {
            $seaHotels = SeaHotel::all();
            $aleanHotels = AleanSeaHotel::all();
        }

        // Объединяем коллекции отелей
        $allHotels = $seaHotels->concat($aleanHotels);

        // Создаём пагинацию вручную
        $paginated = new LengthAwarePaginator(
            $allHotels->forPage($page, $perPage),
            $allHotels->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return $paginated;
    }

    public function getHotelBySlug(string $slug)
    {
        return SeaHotel::where('slug', $slug)->first();
    }

    public function getAleanHotelBySlug(string $slug)
    {
        return AleanSeaHotel::where('slug', $slug)->first();
    }

    public function getResortBySlug(string $slug)
    {
        return SeaResort::where('slug', $slug)->firstOrFail();
    }

    public function getHotelUpsale(string $bus_direction, string $exclude_slug, int $limit = 3)
    {
        return SeaHotel::where('bus_direction', $bus_direction)
            ->where('slug', '!=', $exclude_slug)
            ->inRandomOrder()
            ->limit($limit)
            ->get();
    }

    public function getAleanHotelUpsale(string $bus_direction, string $exclude_slug, int $limit = 3)
    {
        return AleanSeaHotel::where('bus_direction', $bus_direction)
            ->where('slug', '!=', $exclude_slug)
            ->inRandomOrder()
            ->limit($limit)
            ->get();
    }
}
