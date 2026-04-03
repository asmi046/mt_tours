<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederTurkey extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $turkeyId = DB::table('zagran_destinations')->where('slug', 'turkey')->value('id');
        $egyptId = DB::table('zagran_destinations')->where('slug', 'egypt')->value('id');

        $resorts = [];

        if ($turkeyId) {
            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Алания',
                'img' => null,
                'order' => 1,
                'slug' => 'alanya',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Анталия',
                'img' => null,
                'order' => 2,
                'slug' => 'antalya',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Белек',
                'img' => null,
                'order' => 3,
                'slug' => 'belek',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Бодрум',
                'img' => null,
                'order' => 4,
                'slug' => 'bodrum',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Дидим',
                'img' => null,
                'order' => 5,
                'slug' => 'didim',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Измир',
                'img' => null,
                'order' => 6,
                'slug' => 'izmir',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Кемер',
                'img' => null,
                'order' => 7,
                'slug' => 'kemer',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Кушадасы',
                'img' => null,
                'order' => 8,
                'slug' => 'kusadasi',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Мармарис',
                'img' => null,
                'order' => 9,
                'slug' => 'marmaris',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Сиде',
                'img' => null,
                'order' => 10,
                'slug' => 'side',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Стамбул',
                'img' => null,
                'order' => 11,
                'slug' => 'istanbul',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Улудаг',
                'img' => null,
                'order' => 12,
                'slug' => 'uludag',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Фетхие',
                'img' => null,
                'order' => 13,
                'slug' => 'fethiye',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Чешме',
                'img' => null,
                'order' => 14,
                'slug' => 'cesme',
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Эрзурум',
                'img' => null,
                'order' => 15,
                'slug' => 'erzurum',
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
