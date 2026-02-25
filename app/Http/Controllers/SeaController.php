<?php

namespace App\Http\Controllers;

use App\Models\SeaWayPrice;
use App\Services\AleanApiService;
use App\Services\SeaDataService;
use Illuminate\Http\Request;

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
        $hotels = app(SeaDataService::class)->getAllHotels($resort->id);

        return view('sea.resort', compact('resort', 'resorts', 'hotels'));
    }

    public function hotel(string $resort, string $hotel)
    {

        $hotel_data = app(SeaDataService::class)->getHotelBySlug($hotel);

        if ($hotel_data) {
            $upsaleHotels = app(SeaDataService::class)->getHotelUpsale($hotel_data->bus_direction, $hotel_data->slug);
            // dd($hotel_data);

            return view('sea.hotel', ['hotel' => $hotel_data, 'upsaleHotels' => $upsaleHotels]);
        } else {
            $hotel_data = app(SeaDataService::class)->getAleanHotelBySlug($hotel);
            $upsaleHotels = app(SeaDataService::class)->getAleanHotelUpsale($hotel_data->bus_direction, $hotel_data->slug);
            if ($hotel_data->resort) {
                $wayPrice = SeaWayPrice::where('city', $hotel_data->resort->title)->first();
            }

            return view('sea.alean-hotel', ['hotel' => $hotel_data, 'upsaleHotels' => $upsaleHotels, 'wayPrice' => $wayPrice ? $wayPrice->two_way : 0]);
        }
        abort(404);
    }

    public function getTourPrice(Request $request)
    {
        $hotelId = $request->input('hotelid');
        $numberType = $request->input('numbertype');
        $startData = $request->input('startdata');
        $endData = $request->input('enddata');
        $adult = $request->input('adult', 0);
        $before5 = $request->input('before5', 0);
        $before12 = $request->input('before12', 0);

        $price = app(SeaDataService::class)->getTourPrice($hotelId, $numberType, $startData, $endData, $adult, $before5, $before12);

        return $price;
    }

    public function getTourList(Request $request)
    {
        // dd($request->all());
        $resortId = $request->input('resortid');
        $dateFromTo = $request->input('datefromto', '');
        $adults = $request->input('adults', 2);
        $hotels = $request->input('hotels', '');
        $children = $request->input('children', '');
        $children_ages = $request->input('children_ages', '');
        // dd($resortId, $dateFromTo, $adults, $hotels, $children, $children_ages);
        $tours = app(AleanApiService::class)->getTours($resortId, ru_date_to_current_year($dateFromTo), $adults, $hotels, (int) $children, $children_ages ?? '');

        return $tours;
    }

    public function kupit_proezd()
    {
        $sea_way_prices = app(SeaDataService::class)->getAllSeaWayPrices();

        return view('sea.way', compact('sea_way_prices'));
    }
}
