<?php

namespace App\Services;

use App\Models\AleanSeaHotel;
use App\Models\SeaDestination;
use App\Models\SeaHotel;
use App\Models\SeaPrice;
use App\Models\SeaResort;
use App\Models\SeaWayPrice;
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

    public function getAllHotels($resortId = null, $perPage = 30, $directionId = null)
    {
        $page = request()->get('page', 1);

        // Если resortId не передан - получаем все отели, иначе только по курорту
        if ($resortId) {
            $seaHotels = SeaHotel::where('sea_resort_id', $resortId)->get();
            $aleanHotels = AleanSeaHotel::where('sea_resort_id', $resortId)->get();
            dd($resortId, $seaHotels, $aleanHotels);
        } elseif ($directionId) {
            $seaHotels = SeaHotel::where('sea_destination_id', $directionId)->get();
            $aleanHotels = AleanSeaHotel::where('sea_destination_id', $directionId)->get();
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

    public function getDirectionBySlug(string $slug)
    {
        return SeaDestination::where('slug', $slug)->firstOrFail();
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

    public function getAllSeaWayPrices()
    {
        return SeaWayPrice::with('busSchedules')->orderBy('order')->get();
    }

    public function getResortSeaWayPrices(string $resort)
    {
        return SeaWayPrice::with('busSchedules')->where('slug', $resort)->first();
    }

    public function getTourPrice($hotelId, $numberType, $startData, $endData, $adult = 0, $before5 = 0, $before12 = 0)
    {
        $hotel = SeaHotel::where('id', $hotelId)->firstOrFail();
        $prices = SeaPrice::where('viezd', $startData)->where('vozvrashenie', $endData)->firstOrFail();

        $hotelPrice = collect($hotel->number_prices)->firstWhere('number_type', $numberType);

        // dd($prices, $hotelPrice, $hotel->before_5_price, $hotel->before_12_price);

        $basePrice = ($prices->june_day_count * $hotelPrice['june_night_price']) +
        ($prices->july_day_count * $hotelPrice['july_night_price']) +
        ($prices->august_day_count * $hotelPrice['august_night_price']) +
        ($prices->september_day_count * $hotelPrice['september_night_price']);

        $price =
        ($basePrice * $adult) +
        ($before5 * $hotel->before_5_price) +
        ($before12 * ($basePrice * (1 - ($hotel->before_12_price / 100))));

        return $price;
    }
}
