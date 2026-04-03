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
                'title' => 'Купить туры Вунг Тау в Курске',
                'resort_name' => 'Вунг Тау',
                'sub_title' => 'Пляжный отдых на юге Вьетнама',
                'img' => null,
                'order' => 1,
                'slug' => 'vung-tau',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="134" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Вунг Тау из Курска - цены 2026',
                'seo_description' => 'Подберите туры в Вунг Тау из Курска: пляжный отдых, удобные даты вылета и актуальные цены на отдых во Вьетнаме.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Дананг в Курске',
                'resort_name' => 'Дананг',
                'sub_title' => 'Комфортный курорт и город у моря',
                'img' => null,
                'order' => 2,
                'slug' => 'danang',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="103" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Дананг из Курска - отдых во Вьетнаме',
                'seo_description' => 'Туры в Дананг из Курска: пляжи, экскурсии и современные отели. Сравните цены и выберите выгодный тур.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Нячанг в Курске',
                'resort_name' => 'Нячанг',
                'sub_title' => 'Популярный морской отдых и экскурсии',
                'img' => null,
                'order' => 3,
                'slug' => 'nha-trang',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="87" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Нячанг из Курска - лучшие цены',
                'seo_description' => 'Выберите туры в Нячанг из Курска: теплое море, развитая инфраструктура и выгодные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Пхан Ранг в Курске',
                'resort_name' => 'Пхан Ранг',
                'sub_title' => 'Спокойные пляжи и мягкий климат',
                'img' => null,
                'order' => 4,
                'slug' => 'phan-rang',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="244" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Пхан Ранг из Курска - отдых у моря',
                'seo_description' => 'Туры в Пхан Ранг из Курска: спокойный пляжный формат, подбор отелей и актуальные цены на 2026 год.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Фантьет в Курске',
                'resort_name' => 'Фантьет',
                'sub_title' => 'Курорт для семейного отдыха у моря',
                'img' => null,
                'order' => 5,
                'slug' => 'phan-thiet',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="88" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Фантьет из Курска - выгодные предложения',
                'seo_description' => 'Подбор туров в Фантьет из Курска: пляжи, комфортные отели и доступные цены на отдых во Вьетнаме.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Фукуок в Курске',
                'resort_name' => 'Фукуок',
                'sub_title' => 'Островной отдых с белыми пляжами',
                'img' => null,
                'order' => 6,
                'slug' => 'phu-quoc',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="104" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры на Фукуок из Курска - цены и отели',
                'seo_description' => 'Туры на Фукуок из Курска: отдых на острове, теплое море и подбор лучших предложений по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Ханой в Курске',
                'resort_name' => 'Ханой',
                'sub_title' => 'Экскурсионный отдых и культура Вьетнама',
                'img' => null,
                'order' => 7,
                'slug' => 'hanoi',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="269" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Ханой из Курска - экскурсионные маршруты',
                'seo_description' => 'Туры в Ханой из Курска: исторические достопримечательности, удобные программы и выгодные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Хой Ан в Курске',
                'resort_name' => 'Хой Ан',
                'sub_title' => 'Старинный город и пляжный релакс',
                'img' => null,
                'order' => 8,
                'slug' => 'hoi-an',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="105" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Хой Ан из Курска - отдых и экскурсии',
                'seo_description' => 'Выберите туры в Хой Ан из Курска: атмосферный старый город, море и актуальные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $vietnamId,
                'title' => 'Купить туры Хошимин в Курске',
                'resort_name' => 'Хошимин',
                'sub_title' => 'Городские туры и насыщенная программа',
                'img' => null,
                'order' => 9,
                'slug' => 'ho-chi-minh',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="16" tv-resorts="245" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Хошимин из Курска - выгодные цены 2026',
                'seo_description' => 'Подберите туры в Хошимин из Курска: городской отдых, экскурсии и оптимальные предложения по стоимости.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/vietnam/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/vietnam/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
