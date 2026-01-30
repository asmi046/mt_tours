<?php

namespace App\Http\Controllers;

use App\Services\SeaDataService;

class SeaController extends Controller
{
    public function index()
    {
        $resorts = app(SeaDataService::class)->getAllResorts();
        $geoPoints = app(SeaDataService::class)->getHotelGeoPoint();
        $hotels = app(SeaDataService::class)->getAllHotels();
        // dd($hotels);

        return view('sea.index', compact('resorts', 'geoPoints', 'hotels'));
    }

    public function resort(string $resort)
    {
        $resort = app(SeaDataService::class)->getResortBySlug($resort);
        $resorts = app(SeaDataService::class)->getAllResorts();

        return view('sea.resort', compact('resort', 'resorts'));
    }

    public function hotel(string $resort, string $hotel)
    {
        $hotel = app(SeaDataService::class)->getHotelBySlug($hotel);
        $resorts = app(SeaDataService::class)->getAllResorts();

        return view('sea.hotel', compact('hotel', 'resorts'));
    }
}
