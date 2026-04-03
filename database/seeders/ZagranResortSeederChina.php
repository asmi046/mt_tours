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
                'title' => 'Купить туры Бэйдайхэ в Курске',
                'resort_name' => 'Бэйдайхэ',
                'sub_title' => 'Пляжный отдых на побережье Желтого моря',
                'img' => null,
                'order' => 1,
                'slug' => 'beidaihe',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="321" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Бэйдайхэ в Курске - цены 2026',
                'seo_description' => 'Туры в Бэйдайхэ из Курска: морской отдых, комфортные отели и выгодные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Гонконг в Курске',
                'resort_name' => 'Гонконг',
                'sub_title' => 'Городской отдых и насыщенные впечатления',
                'img' => null,
                'order' => 2,
                'slug' => 'hongkong',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="302" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Гонконг в Курске - лучшие предложения',
                'seo_description' => 'Подберите туры в Гонконг из Курска: городской ритм, экскурсии и актуальные цены на поездку.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Гуанчжоу в Курске',
                'resort_name' => 'Гуанчжоу',
                'sub_title' => 'Современный мегаполис и экскурсионные маршруты',
                'img' => null,
                'order' => 3,
                'slug' => 'guangzhou',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="247" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Гуанчжоу в Курске - цены и маршруты',
                'seo_description' => 'Туры в Гуанчжоу из Курска: удобные программы, интересные локации и выгодные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Ляонин в Курске',
                'resort_name' => 'Ляонин',
                'sub_title' => 'Регион с морскими курортами и экскурсиями',
                'img' => null,
                'order' => 4,
                'slug' => 'liaoning',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="308" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Ляонин в Курске - выгодные цены',
                'seo_description' => 'Выберите туры в Ляонин из Курска: пляжный и экскурсионный отдых, подбор лучших предложений.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Пекин в Курске',
                'resort_name' => 'Пекин',
                'sub_title' => 'Столица Китая и богатая экскурсионная программа',
                'img' => null,
                'order' => 5,
                'slug' => 'beijing',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="65" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Пекин в Курске - экскурсионный отдых',
                'seo_description' => 'Туры в Пекин из Курска: Великая китайская стена, достопримечательности и хорошие цены на туры.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Урумчи в Курске',
                'resort_name' => 'Урумчи',
                'sub_title' => 'Контрасты природы и городская атмосфера',
                'img' => null,
                'order' => 6,
                'slug' => 'urumqi',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="560" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Урумчи в Курске - цены 2026',
                'seo_description' => 'Подбор туров в Урумчи из Курска: интересные маршруты, комфортный отдых и актуальная стоимость.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Хайнань в Курске',
                'resort_name' => 'Хайнань',
                'sub_title' => 'Тропический остров и отдых у моря',
                'img' => null,
                'order' => 7,
                'slug' => 'hainan',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="584" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Хайнань в Курске - пляжный отдых 2026',
                'seo_description' => 'Туры на Хайнань из Курска: теплое море, песчаные пляжи и выгодные предложения на отдых в Китае.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $chinaId,
                'title' => 'Купить туры Шанхай в Курске',
                'resort_name' => 'Шанхай',
                'sub_title' => 'Современный мегаполис и яркие впечатления',
                'img' => null,
                'order' => 8,
                'slug' => 'shanghai',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="13" tv-resorts="246" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Шанхай в Курске - выгодные цены',
                'seo_description' => 'Выберите туры в Шанхай из Курска: современный город, экскурсии и актуальные цены на поездку.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/china/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/china/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
