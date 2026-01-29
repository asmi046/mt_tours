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
        // dd($geoPoints);

        return view('sea.index', compact('resorts', 'geoPoints', 'hotels'));
    }
}
