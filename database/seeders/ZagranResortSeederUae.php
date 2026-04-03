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
                'title' => 'Купить туры Абу-Даби в Курске',
                'resort_name' => 'Абу-Даби',
                'sub_title' => 'Премиальный отдых и городские впечатления',
                'img' => null,
                'order' => 1,
                'slug' => 'abu-dhabi',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="43" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Абу-Даби из Курска - цены 2026',
                'seo_description' => 'Подберите туры в Абу-Даби из Курска: комфортные отели, выгодные цены и удобные даты для отдыха в ОАЭ.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Аджман в Курске',
                'resort_name' => 'Аджман',
                'sub_title' => 'Спокойный отдых у побережья Персидского залива',
                'img' => null,
                'order' => 2,
                'slug' => 'ajman',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="44" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Аджман из Курска - отдых у моря',
                'seo_description' => 'Туры в Аджман из Курска: пляжный формат отдыха, подбор отелей и актуальные цены на поездку в ОАЭ.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Дубай в Курске',
                'resort_name' => 'Дубай',
                'sub_title' => 'Яркий мегаполис и пляжный отдых',
                'img' => null,
                'order' => 3,
                'slug' => 'dubai',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="45" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Дубай из Курска - лучшие цены',
                'seo_description' => 'Выберите туры в Дубай из Курска: современные отели, шопинг, пляжи и выгодные предложения на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Дубай-Джумейра в Курске',
                'resort_name' => 'Дубай-Джумейра',
                'sub_title' => 'Пляжи Джумейры и отдых высокого уровня',
                'img' => null,
                'order' => 4,
                'slug' => 'dubai-jumeirah',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="373" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Дубай Джумейра из Курска - цены 2026',
                'seo_description' => 'Туры в Дубай Джумейра из Курска: пляжные отели, комфортный сервис и актуальные цены на отдых в ОАЭ.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Рас-эль-Хайм в Курске',
                'resort_name' => 'Рас-эль-Хайм',
                'sub_title' => 'Природа, море и семейный формат отдыха',
                'img' => null,
                'order' => 5,
                'slug' => 'ras-al-khaimah',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="46" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Рас-эль-Хайма из Курска - выгодно',
                'seo_description' => 'Подбор туров в Рас-эль-Хайма из Курска: пляжи, отели для семьи и привлекательные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Фуджейра в Курске',
                'resort_name' => 'Фуджейра',
                'sub_title' => 'Пляжный отдых на побережье Индийского океана',
                'img' => null,
                'order' => 6,
                'slug' => 'fujairah',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="47" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Фуджейру из Курска - отдых у океана',
                'seo_description' => 'Туры в Фуджейру из Курска: чистые пляжи, спокойная атмосфера и лучшие предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $uaeId,
                'title' => 'Купить туры Шарджа в Курске',
                'resort_name' => 'Шарджа',
                'sub_title' => 'Культурный отдых и удобное расположение',
                'img' => null,
                'order' => 7,
                'slug' => 'sharjah',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="9" tv-resorts="48" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Шарджу из Курска - цены на отдых',
                'seo_description' => 'Выберите туры в Шарджу из Курска: комфортные отели, морской отдых и выгодные условия бронирования.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/uae/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/uae/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
