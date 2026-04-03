<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederAbkhazia extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abkhaziaId = DB::table('zagran_destinations')->where('slug', 'abkhazia')->value('id');

        $resorts = [];

        if ($abkhaziaId) {
            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Гагра',
                'img' => null,
                'order' => 1,
                'slug' => 'gagra',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Гудаута',
                'img' => null,
                'order' => 2,
                'slug' => 'gudauta',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Новый Афон',
                'img' => null,
                'order' => 3,
                'slug' => 'novy-afon',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Пицунда',
                'img' => null,
                'order' => 4,
                'slug' => 'pitsunda',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Сухум',
                'img' => null,
                'order' => 5,
                'slug' => 'sukhum',
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
