<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederSriLanka extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sriLankaId = DB::table('zagran_destinations')->where('slug', 'sri-lanka')->value('id');

        $resorts = [];

        if ($sriLankaId) {
            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Аругам Бей',
                'img' => null,
                'order' => 1,
                'slug' => 'arugam-bay',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Бентота',
                'img' => null,
                'order' => 2,
                'slug' => 'bentota',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Галле',
                'img' => null,
                'order' => 3,
                'slug' => 'galle',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Калутара',
                'img' => null,
                'order' => 4,
                'slug' => 'kalutara',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Канди',
                'img' => null,
                'order' => 5,
                'slug' => 'kandy',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Коггала',
                'img' => null,
                'order' => 6,
                'slug' => 'koggala',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Коломбо',
                'img' => null,
                'order' => 7,
                'slug' => 'colombo',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Негомбо',
                'img' => null,
                'order' => 8,
                'slug' => 'negombo',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Сигирия',
                'img' => null,
                'order' => 9,
                'slug' => 'sigiriya',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Тангалле',
                'img' => null,
                'order' => 10,
                'slug' => 'tangalle',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Тринкомале',
                'img' => null,
                'order' => 11,
                'slug' => 'trincomalee',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Унаватуна',
                'img' => null,
                'order' => 12,
                'slug' => 'unawatuna',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Хиккадува',
                'img' => null,
                'order' => 13,
                'slug' => 'hikkaduwa',
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
