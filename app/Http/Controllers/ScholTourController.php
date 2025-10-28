<?php

namespace App\Http\Controllers;

use App\Models\ScholTour;
use Illuminate\Http\Request;

class ScholTourController extends Controller
{
    public function index()
    {
        $tours = ScholTour::orderBy('order')->get();

        $groupedTours = $tours->groupBy('category');

        $groupedTours = $groupedTours->filter(function ($tours, $key) {
            return !empty($key);
        });

        $groupedTours->prepend($tours, 'Все');

        return view('schol.index', ['tours' => $groupedTours]);
    }
}
