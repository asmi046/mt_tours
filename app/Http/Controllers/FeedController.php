<?php

namespace App\Http\Controllers;

use App\Models\Product;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\FeedServices;


class FeedController extends Controller
{
    public function yml_get_feed(FeedServices $fs, $category = null) {

        $param = $fs->get_feed_data($category);

        return response()->view('feed.yml_cactegory', $param)->header('Content-Type', 'text/xml');;
    }
}
