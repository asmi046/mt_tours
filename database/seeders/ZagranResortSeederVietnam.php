<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederVietnam extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $vietnamId = DB::table('zagran_destinations')->where('slug', 'vietnam')->value('id');

        $resorts = [];

        if ($vietnamId) {
            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Вунг Тау',
                'img' => null,
                'order' => 1,
                'slug' => 'vung-tau',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Дананг',
                'img' => null,
                'order' => 2,
                'slug' => 'danang',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Нячанг',
                'img' => null,
                'order' => 3,
                'slug' => 'nha-trang',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Пхан Ранг',
                'img' => null,
                'order' => 4,
                'slug' => 'phan-rang',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Фантьет',
                'img' => null,
                'order' => 5,
                'slug' => 'phan-thiet',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Фукуок',
                'img' => null,
                'order' => 6,
                'slug' => 'phu-quoc',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Ханой',
                'img' => null,
                'order' => 7,
                'slug' => 'hanoi',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Хой Ан',
                'img' => null,
                'order' => 8,
                'slug' => 'hoi-an',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Хошимин',
                'img' => null,
                'order' => 9,
                'slug' => 'ho-chi-minh',
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
