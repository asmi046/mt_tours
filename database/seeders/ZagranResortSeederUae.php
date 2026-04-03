<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederUae extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $uaeId = DB::table('zagran_destinations')->where('slug', 'uae')->value('id');

        $resorts = [];

        if ($uaeId) {
            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Абу-Даби',
                'img' => null,
                'order' => 1,
                'slug' => 'abu-dhabi',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Аджман',
                'img' => null,
                'order' => 2,
                'slug' => 'ajman',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Дубай',
                'img' => null,
                'order' => 3,
                'slug' => 'dubai',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Дубай-Джумейра',
                'img' => null,
                'order' => 4,
                'slug' => 'dubai-jumeirah',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Рас-эль-Хайм',
                'img' => null,
                'order' => 5,
                'slug' => 'ras-al-khaimah',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Фуджейра',
                'img' => null,
                'order' => 6,
                'slug' => 'fujairah',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Шарджа',
                'img' => null,
                'order' => 7,
                'slug' => 'sharjah',
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
