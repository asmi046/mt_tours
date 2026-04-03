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
                'title' => 'Купить туры Гагра в Курске',
                'resort_name' => 'Гагра',
                'sub_title' => 'Популярный курорт с морским климатом',
                'img' => null,
                'order' => 1,
                'slug' => 'gagra',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="46" tv-resorts="418" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Гагра в Курске - цены 2026',
                'seo_description' => 'Туры в Гагру из Курска: пляжный отдых, комфортные отели и выгодные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Купить туры Гудаута в Курске',
                'resort_name' => 'Гудаута',
                'sub_title' => 'Тихий отдых на берегу Черного моря',
                'img' => null,
                'order' => 2,
                'slug' => 'gudauta',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="46" tv-resorts="419" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Гудаута в Курске - лучшие цены',
                'seo_description' => 'Подберите туры в Гудауту из Курска: спокойные пляжи, удобное размещение и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Купить туры Новый Афон в Курске',
                'resort_name' => 'Новый Афон',
                'sub_title' => 'Море, природа и известные достопримечательности',
                'img' => null,
                'order' => 3,
                'slug' => 'novy-afon',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="46" tv-resorts="420" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Новый Афон в Курске - отдых в Абхазии',
                'seo_description' => 'Туры в Новый Афон из Курска: живописные места, экскурсии и выгодные предложения на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Купить туры Пицунда в Курске',
                'resort_name' => 'Пицунда',
                'sub_title' => 'Сосновый воздух и чистое море',
                'img' => null,
                'order' => 4,
                'slug' => 'pitsunda',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="46" tv-resorts="422" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Пицунда в Курске - цены на отдых',
                'seo_description' => 'Выберите туры в Пицунду из Курска: комфортный отдых, чистые пляжи и привлекательные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $abkhaziaId,
                'title' => 'Купить туры Сухум в Курске',
                'resort_name' => 'Сухум',
                'sub_title' => 'Столица Абхазии и отдых у моря',
                'img' => null,
                'order' => 5,
                'slug' => 'sukhum',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="46" tv-resorts="421" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Сухум в Курске - выгодные предложения',
                'seo_description' => 'Подбор туров в Сухум из Курска: городской комфорт, морской отдых и оптимальные цены.',
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
