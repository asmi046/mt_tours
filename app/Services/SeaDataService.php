<?php

namespace App\Services;

use App\Models\SeaHotel;
use App\Models\SeaResort;

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
                'link' => '#',
            ];
        }

        return $result;
    }

    public function getAllHotels()
    {
        return SeaHotel::all();
    }
}
