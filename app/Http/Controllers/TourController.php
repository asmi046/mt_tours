<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index($slug) {

        $tour_info = Tour::where('slug', $slug)->firstOrFail();
        $tour_any = Tour::inRandomOrder()->take(7)->get();

        $tur_programm = [];

        if ($tour_info->tour_program)
        foreach ($tour_info->tour_program as $item ) {
            $tur_programm[$item['type']][$item['number']] = $item;
        }

        return view('tour_page', ['tour_info' => $tour_info, 'struct_programm' => $tur_programm, 'tour_any' => $tour_any]);
    }
}
