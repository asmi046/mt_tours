<?php

namespace App\Http\Controllers;

use App\Models\BusCatalog;
use App\Models\Page\Page;
use App\Models\SeaBusSchedule;
use App\Models\SeaResort;
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
        // dd($resort, $resorts, $hotels);

        return view('sea.resort', compact('resort', 'resorts', 'hotels'));
    }

    public function direction(string $direction)
    {
        $direction = app(SeaDataService::class)->getDirectionBySlug($direction);
        $resorts = app(SeaDataService::class)->getAllResorts();
        $hotels = app(SeaDataService::class)->getAllHotels(null, 30, $direction->id);
        // dd($hotels, $direction);

        return view('sea.direction', compact('direction', 'resorts', 'hotels'));
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

        $text = Page::where('slug', 'kupit-bilet-na-more-iz-kurska')->first() ?? null;

        return view('sea.way', compact('sea_way_prices', 'text'));
    }

    public function kupit_proezd_resort(string $slug)
    {
        $sea_way_resort = app(SeaDataService::class)->getResortSeaWayPrices($slug);

        // dd($sea_way_resort);

        return view('sea.way-resort', compact('sea_way_resort'));
    }

    public function grafik_zaezdov()
    {
        $schedulesGrouped = SeaBusSchedule::all()
            ->groupBy('direction')
            ->map(fn ($items) => $items->sortBy('sort_order')->values());

        $resortsGrouped = SeaResort::all()
            ->groupBy('bus_schedule')
            ->map(fn ($items) => $items->sortBy('sort_order')->values());
        // dd($schedulesGrouped, $resortsGrouped);

        return view('sea.grafik-zaezdov', compact('schedulesGrouped', 'resortsGrouped'));
    }

    public function nashi_avtobusi()
    {
        $busees = BusCatalog::all()->sortBy('order');

        return view('sea.nashi-avtobusi', compact('busees'));
    }

    public function grafik()
    {
        $grafik = Page::where('slug', 'grafik')->firstOrFail();

        return view('sea.grafik', compact('grafik'));
    }
}
