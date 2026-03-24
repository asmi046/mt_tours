<?php

namespace App\Http\Controllers;

class ZagranController extends Controller
{
    public function index()
    {
        return view('zagran.index');
    }

    public function page(string $slug)
    {
        return view('zagran.page');
    }
}
