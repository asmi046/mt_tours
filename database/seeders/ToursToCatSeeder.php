<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ToursToCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tour_IDs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

        foreach ($tour_IDs as $item) {
            DB::table("tour_tour_category")->insert(
                [
                    'tour_id'=> $item,
                    'tour_category_id'=> 2,
                ]
            );
            DB::table("tour_tour_category")->insert(
                [
                    'tour_id'=> $item,
                    'tour_category_id'=> 3,
                ]
            );
        }

    }
}
