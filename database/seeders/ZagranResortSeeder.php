<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('zagran_resorts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $turkeyId = DB::table('zagran_destinations')->where('slug', 'turkey')->value('id');
        $egyptId = DB::table('zagran_destinations')->where('slug', 'egypt')->value('id');

        $resorts = [];

        if ($turkeyId) {
            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Анталья',
                'img' => null,
                'order' => 1,
                'slug' => 'antalya',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Кемер',
                'img' => null,
                'order' => 2,
                'slug' => 'kemer',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if ($egyptId) {
            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Хургада',
                'img' => null,
                'order' => 1,
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
                'order' => 2,
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
