<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
                'priority' => '1.0'
            ]);

            // Календарь
            $urls->push([
                'loc' => url('/calendar'),
                'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ]);

            // Календарь
            $urls->push([
                'loc' => url('/school-tours'),
                'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ]);

            $urls->push([
                'loc' => url('/tours'),
                'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ]);

            // Категории
            TourCategory::all()->each(function ($category) use ($urls) {
                $urls->push([
                    'loc' => url("/tour_category/{$category->slug}"),
                    'lastmod' => ($category->updated_at) ? $category->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                    'changefreq' => 'weekly',
                    'priority' => '0.8'
                ]);
            });

            // Туры
            Tour::all()->each(function ($tour) use ($urls) {
                $urls->push([
                    'loc' => url("/tour/{$tour->slug}"),
                    'lastmod' => ($tour->updated_at) ? $tour->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                    'changefreq' => 'monthly',
                    'priority' => '0.6',
                    'image' => $tour->img ? url('/storage/' . $tour->img) : null
                ]);
            });

            return response()->view('sitemap', compact('urls'))
                ->header('Content-Type', 'text/xml');
        }
}
