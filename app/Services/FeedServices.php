<?php
namespace App\Services;

use App\Models\Tour;
use App\Models\TourCategory;

class FeedServices {

    public function get_feed_data($category = null) {
        $result = [
            'curent_category' => 1,
            'categorys' => null,
            'cat_product' => null,
        ];

        if ($category)
        {
            $cat = TourCategory::where('slug', $category)->first();
            if ($cat) {
                $result['curent_category'] = $cat->id;
                $result['categorys'][] = [
                    'id' => $cat->id,
                    'title' => $cat->name,
                ];
                $result['cat_product'] = $cat->tours()->get();
            }

        } else {
            $result['categorys'][] = [
                'id' => 1,
                'title' => "Экскурсионные туры по России",
            ];

            $result['cat_product'] = Tour::all();
        }

        return $result;
    }
}
