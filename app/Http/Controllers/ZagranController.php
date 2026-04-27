<?php

namespace App\Http\Controllers;

use App\Models\ZagranDestination;
use App\Models\ZagranResort;

class ZagranController extends Controller
{
    public function index()
    {
        return view('zagran.index');
    }

    public function page(string $slug)
    {
        $page = ZagranDestination::where('slug', $slug)->firstOrFail();

        return view('zagran.page', compact('page'));
    }

    public function hot(string $slug)
    {
        $page = ZagranDestination::where('slug', $slug)->firstOrFail();

        return view('zagran.hot', compact('page'));
    }

    public function resort(string $state, string $resort)
    {
        $page = ZagranResort::where('slug', $resort)->with('destination')->firstOrFail();

        return view('zagran.resort', compact('page', 'resort'));
    }
}
