<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index(string $section)
    {
        return Faq::query()
            ->where('section', $section)
            ->orderBy('sort_order')
            ->get();
    }
}
