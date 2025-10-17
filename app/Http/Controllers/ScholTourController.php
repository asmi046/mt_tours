<?php

namespace App\Http\Controllers;

use App\Models\ScholTour;
use Illuminate\Http\Request;

class ScholTourController extends Controller
{
    public function index()
    {
        $tours = ScholTour::orderBy('order')->get();
        return view('schol.index', compact('tours'));
    }
}
