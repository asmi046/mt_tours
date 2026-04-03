<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederChina extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $chinaId = DB::table('zagran_destinations')->where('slug', 'china')->value('id');

        $resorts = [];

        if ($chinaId) {
            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Бэйдайхэ',
                'img' => null,
                'order' => 1,
                'slug' => 'beidaihe',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Гонконг',
                'img' => null,
                'order' => 2,
                'slug' => 'hongkong',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Гуанчжоу',
                'img' => null,
                'order' => 3,
                'slug' => 'guangzhou',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Ляонин',
                'img' => null,
                'order' => 4,
                'slug' => 'liaoning',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Пекин',
                'img' => null,
                'order' => 5,
                'slug' => 'beijing',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Урумчи',
                'img' => null,
                'order' => 6,
                'slug' => 'urumqi',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Хайнань',
                'img' => null,
                'order' => 7,
                'slug' => 'hainan',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Шанхай',
                'img' => null,
                'order' => 8,
                'slug' => 'shanghai',
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
