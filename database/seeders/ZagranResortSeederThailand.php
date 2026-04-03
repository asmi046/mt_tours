<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederThailand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $thailandId = DB::table('zagran_destinations')->where('slug', 'thailand')->value('id');

        $resorts = [];

        if ($thailandId) {
            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Бангкок',
                'img' => null,
                'order' => 1,
                'slug' => 'bangkok',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Као Лак',
                'img' => null,
                'order' => 2,
                'slug' => 'khao-lak',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Ко Чанг',
                'img' => null,
                'order' => 3,
                'slug' => 'koh-chang',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Краби',
                'img' => null,
                'order' => 4,
                'slug' => 'krabi',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Паттайя',
                'img' => null,
                'order' => 5,
                'slug' => 'pattaya',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Пхукет',
                'img' => null,
                'order' => 6,
                'slug' => 'phuket',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Районг',
                'img' => null,
                'order' => 7,
                'slug' => 'rayong',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Самуи',
                'img' => null,
                'order' => 8,
                'slug' => 'samui',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Хуа Хин',
                'img' => null,
                'order' => 9,
                'slug' => 'hua-hin',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Чианг Май',
                'img' => null,
                'order' => 10,
                'slug' => 'chiang-mai',
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
