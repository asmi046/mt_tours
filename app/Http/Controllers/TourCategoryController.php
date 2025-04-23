<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourCategoryController extends Controller
{
    public function index($slug) {
        $cat_info = TourCategory::where('slug', $slug)->firstOrFail();

        $template = $cat_info?$cat_info->template_name:"categories.all";

        return view($template, ['cat_info' => $cat_info]);

    }
}
