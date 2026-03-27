<?php

namespace App\Http\Controllers;

use App\Models\ZagranDestination;

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
}
