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
                'title' => 'Купить туры Дахаб в Курске',
                'resort_name' => 'Дахаб',
                'sub_title' => 'Спокойный курорт для дайвинга и релакса',
                'img' => null,
                'order' => 1,
                'slug' => 'dahab',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="28" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Дахаб в Курске - цены 2026',
                'seo_description' => 'Туры в Дахаб из Курска: Красное море, дайвинг и выгодные предложения на отдых в Египте.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Купить туры Сафага в Курске',
                'resort_name' => 'Сафага',
                'sub_title' => 'Пляжный отдых и мягкий климат круглый год',
                'img' => null,
                'order' => 2,
                'slug' => 'safaga',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="28" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Сафага в Курске - выгодные цены',
                'seo_description' => 'Подберите туры в Сафагу из Курска: спокойное побережье, комфортные отели и хорошие цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Купить туры Хургада в Курске',
                'resort_name' => 'Хургада',
                'sub_title' => 'Популярный отдых на Красном море',
                'img' => null,
                'order' => 3,
                'slug' => 'hurghada',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="28" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Хургада в Курске - отдых в Египте',
                'seo_description' => 'Туры в Хургаду из Курска: удобные вылеты, проверенные отели и актуальные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $egyptId,
                'title' => 'Купить туры Шарм-эль-Шейх в Курске',
                'resort_name' => 'Шарм-эль-Шейх',
                'sub_title' => 'Курорт с кораллами и высоким сервисом',
                'img' => null,
                'order' => 4,
                'slug' => 'sharm-el-sheikh',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="28" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Шарм-эль-Шейх в Курске - цены 2026',
                'seo_description' => 'Выберите туры в Шарм-эль-Шейх из Курска: теплое море, рифы и лучшие предложения на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (! empty($resorts)) {
            $resortRows = array_map(static function (array $item): array {
                unset($item['seo_title'], $item['seo_description']);

                return $item;
            }, $resorts);

            DB::table('zagran_resorts')->insert($resortRows);

            foreach ($resorts as $item) {
                DB::table('seo_data')->updateOrInsert(
                    ['url' => 'poisk-turov-on-line-v-kurske/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
