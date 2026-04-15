<?php

namespace App\Http\Controllers;

use App\Models\SeaHotel;
use App\Models\SeaResort;
use App\Models\Tour;
use App\Models\TourCategory;
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
                'image' => $tour->img ? url($tour->img) : null,
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
                'loc' => url("/tury-na-more/{$hotel->slug}"),
                'lastmod' => ($hotel->updated_at) ? $hotel->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $hotel->img ? url($hotel->img) : null,
            ]);
        });

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
