<?php

namespace App\Http\Controllers;

use App\Models\Page\Page;

class SanatoriController extends Controller
{
    public function index()
    {
        $text = Page::where('slug', 'kupit-putevku-v-sanatoriy')->first() ?? null;

        return view('sanatori.index', compact('text'));
    }
}
