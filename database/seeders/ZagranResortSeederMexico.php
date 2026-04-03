<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederMexico extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $mexicoId = DB::table('zagran_destinations')->where('slug', 'mexico')->value('id');

        $resorts = [];

        if ($mexicoId) {
            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Канкун',
                'img' => null,
                'order' => 1,
                'slug' => 'cancun',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Косумель',
                'img' => null,
                'order' => 2,
                'slug' => 'cozumel',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Лос Кабос',
                'img' => null,
                'order' => 3,
                'slug' => 'los-cabos',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Мехико',
                'img' => null,
                'order' => 4,
                'slug' => 'mexico-city',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Плайя Дель Кармен',
                'img' => null,
                'order' => 5,
                'slug' => 'playa-del-carmen',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Ривьера Майя',
                'img' => null,
                'order' => 6,
                'slug' => 'riviera-maya',
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
