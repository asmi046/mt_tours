<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederEgypt extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $egyptId = DB::table('zagran_destinations')->where('slug', 'egypt')->value('id');

        $resorts = [];

        if ($egyptId) {
            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Дахаб',
                'img' => null,
                'order' => 1,
                'slug' => 'dahab',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Сафага',
                'img' => null,
                'order' => 2,
                'slug' => 'safaga',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Хургада',
                'img' => null,
                'order' => 3,
                'slug' => 'hurghada',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Шарм-эль-Шейх',
                'img' => null,
                'order' => 4,
                'slug' => 'sharm-el-sheikh',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (! empty($resorts)) {
            DB::table('zagran_resorts')->insert($resorts);
        }
    }
}
