<?php

namespace App\Http\Controllers;

use App\Models\AleanSeaHotel;
use App\Models\SeaHotel;
use App\Models\SeaResort;
use App\Models\SeaWayPrice;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\ZagranDestination;
use App\Models\ZagranResort;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = collect();

        // Главные страницы
        $urls->push([
            'loc' => url('/'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Календарь
        $urls->push([
            'loc' => url('/calendar'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Календарь
        $urls->push([
            'loc' => url('/school-tours'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        $urls->push([
            'loc' => url('/tours'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Категории
        TourCategory::all()->each(function ($category) use ($urls) {
            $urls->push([
                'loc' => url("/tour_category/{$category->slug}"),
                'lastmod' => ($category->updated_at) ? $category->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ]);
        });

        // Туры
        Tour::all()->each(function ($tour) use ($urls) {
            $urls->push([
                'loc' => url("/tour/{$tour->slug}"),
                'lastmod' => ($tour->updated_at) ? $tour->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $tour->img ? url('/storage/'.$tour->img) : null,
            ]);
        });

        $urls->push([
            'loc' => url('/tury-na-more'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        $urls->push([
            'loc' => url('/tury-na-more/region/crimea'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        $urls->push([
            'loc' => url('/tury-na-more/region/krasnodarskiy-kray'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        $urls->push([
            'loc' => url('/tury-na-more/kupit-proezd'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        // Купить проезд в ....
        SeaWayPrice::all()->each(function ($price) use ($urls) {
            $urls->push([
                'loc' => url("/tury-na-more/kupit-proezd/{$price->slug}"),
                'lastmod' => ($price->updated_at) ? $price->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        });

        $urls->push([
            'loc' => url('/tury-na-more/grafik-zaezdov'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        $urls->push([
            'loc' => url('/tury-na-more/nashi-avtobusi'),
            'lastmod' => '2026-04-13T00:00:00Z',
            'changefreq' => 'weekly',
            'priority' => '0.5',
        ]);

        // Курорты
        SeaResort::all()->each(function ($resort) use ($urls) {
            $urls->push([
                'loc' => url("/tury-na-more/{$resort->slug}"),
                'lastmod' => ($resort->updated_at) ? $resort->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ]);
        });

        // Наши отели
        SeaHotel::all()->each(function ($hotel) use ($urls) {
            $urls->push([
                'loc' => url("/tury-na-more/{$hotel->resort->slug}/{$hotel->slug}"),
                'lastmod' => ($hotel->updated_at) ? $hotel->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $hotel->img ? url($hotel->img) : null,
            ]);
        });

        // Alean отели
        AleanSeaHotel::all()->each(function ($hotel) use ($urls) {
            if ($hotel->resort) {
                $urls->push([
                    'loc' => url("/tury-na-more/{$hotel->resort->slug}/{$hotel->slug}"),
                    'lastmod' => ($hotel->updated_at) ? $hotel->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                    'changefreq' => 'monthly',
                    'priority' => '0.6',
                    'image' => $hotel->img ? url($hotel->img) : null,
                ]);
            }
        });

        // Заграница

        $urls->push([
            'loc' => url('/poisk-turov-on-line-v-kurske'),
            'lastmod' => Carbon::now()->utc()->subDays(random_int(1, 30))->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Заграница - направления

        ZagranDestination::all()->each(function ($destination) use ($urls) {
            $urls->push([
                'loc' => url("/poisk-turov-on-line-v-kurske/{$destination->slug}"),
                'lastmod' => ($destination->updated_at) ? $destination->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $destination->img ? url($destination->img) : null,
            ]);

            $urls->push([
                'loc' => url("/poisk-turov-on-line-v-kurske/{$destination->slug}/hot-tours"),
                'lastmod' => ($destination->updated_at) ? $destination->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $destination->img ? url($destination->img) : null,
            ]);
        });

        // Заграница - курорты

        ZagranResort::all()->each(function ($resort) use ($urls) {
            $urls->push([
                'loc' => url("/poisk-turov-on-line-v-kurske/{$resort->destination->slug}/{$resort->slug}"),
                'lastmod' => ($resort->updated_at) ? $resort->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $resort->img ? url($resort->img) : null,
            ]);
        });

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
