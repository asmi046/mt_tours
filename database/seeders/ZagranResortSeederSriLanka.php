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
                'title' => 'Купить туры Аругам Бей в Курске',
                'resort_name' => 'Аругам Бей',
                'sub_title' => 'Серфинг и пляжный отдых на востоке острова',
                'img' => null,
                'order' => 1,
                'slug' => 'arugam-bay',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="589" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Аругам Бей в Курске - цены 2026',
                'seo_description' => 'Туры в Аругам Бей из Курска: серфинг, пляжный отдых и лучшие цены на поездку в Шри-Ланку.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Бентота в Курске',
                'resort_name' => 'Бентота',
                'sub_title' => 'Песчаные пляжи и спокойный отдых у океана',
                'img' => null,
                'order' => 2,
                'slug' => 'bentota',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="53" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Бентота в Курске - отдых у океана',
                'seo_description' => 'Подберите туры в Бентоту из Курска: уютные отели, теплый океан и выгодные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Галле в Курске',
                'resort_name' => 'Галле',
                'sub_title' => 'Исторический город и отдых на побережье',
                'img' => null,
                'order' => 3,
                'slug' => 'galle',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="590" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Галле в Курске - экскурсии и пляжи',
                'seo_description' => 'Туры в Галле из Курска: колониальная архитектура, океан и привлекательные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Калутара в Курске',
                'resort_name' => 'Калутара',
                'sub_title' => 'Тропический курорт с широкими пляжами',
                'img' => null,
                'order' => 4,
                'slug' => 'kalutara',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="54" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Калутара в Курске - выгодные цены',
                'seo_description' => 'Выберите туры в Калутара из Курска: пляжный формат отдыха, подбор отелей и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Канди в Курске',
                'resort_name' => 'Канди',
                'sub_title' => 'Горный климат и культурные маршруты',
                'img' => null,
                'order' => 5,
                'slug' => 'kandy',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="591" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Канди в Курске - экскурсионный отдых',
                'seo_description' => 'Туры в Канди из Курска: древние храмы, прохладный климат и интересные экскурсионные программы.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Коггала в Курске',
                'resort_name' => 'Коггала',
                'sub_title' => 'Тихий океанский курорт для релакса',
                'img' => null,
                'order' => 6,
                'slug' => 'koggala',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="55" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Коггала в Курске - спокойный отдых',
                'seo_description' => 'Подбор туров в Коггалу из Курска: уединенные пляжи, комфортные отели и разумные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Коломбо в Курске',
                'resort_name' => 'Коломбо',
                'sub_title' => 'Городской ритм и отдых на океане',
                'img' => null,
                'order' => 7,
                'slug' => 'colombo',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="56" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Коломбо в Курске - цены на 2026 год',
                'seo_description' => 'Туры в Коломбо из Курска: городские экскурсии, океанский климат и выгодные условия бронирования.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Негомбо в Курске',
                'resort_name' => 'Негомбо',
                'sub_title' => 'Удобный курорт рядом с аэропортом',
                'img' => null,
                'order' => 8,
                'slug' => 'negombo',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="57" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Негомбо в Курске - отдых на Шри-Ланке',
                'seo_description' => 'Выберите туры в Негомбо из Курска: комфортный пляжный отдых и актуальные предложения по стоимости.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Сигирия в Курске',
                'resort_name' => 'Сигирия',
                'sub_title' => 'Природа и знаменитая Львиная скала',
                'img' => null,
                'order' => 9,
                'slug' => 'sigiriya',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="58" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Сигирия в Курске - экскурсии и природа',
                'seo_description' => 'Туры в Сигирию из Курска: культурные маршруты, уникальные ландшафты и хорошие цены на поездку.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Тангалле в Курске',
                'resort_name' => 'Тангалле',
                'sub_title' => 'Уединенные пляжи и комфортный релакс',
                'img' => null,
                'order' => 10,
                'slug' => 'tangalle',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="592" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Тангалле в Курске - отдых у океана',
                'seo_description' => 'Подберите туры в Тангалле из Курска: тишина, чистые пляжи и выгодные предложения на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Тринкомале в Курске',
                'resort_name' => 'Тринкомале',
                'sub_title' => 'Восточное побережье и прозрачное море',
                'img' => null,
                'order' => 11,
                'slug' => 'trincomalee',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="59" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Тринкомале в Курске - лучшие цены',
                'seo_description' => 'Туры в Тринкомале из Курска: теплый океан, дайвинг и подбор выгодных цен на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Унаватуна в Курске',
                'resort_name' => 'Унаватуна',
                'sub_title' => 'Популярная бухта для отдыха у океана',
                'img' => null,
                'order' => 12,
                'slug' => 'unawatuna',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="593" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Унаватуна в Курске - цены на отдых',
                'seo_description' => 'Выберите туры в Унаватуну из Курска: удобные отели, песчаные пляжи и актуальные предложения.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $sriLankaId,
                'title' => 'Купить туры Хиккадува в Курске',
                'resort_name' => 'Хиккадува',
                'sub_title' => 'Коралловые рифы и активный пляжный отдых',
                'img' => null,
                'order' => 13,
                'slug' => 'hikkaduwa',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="12" tv-resorts="594" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Хиккадува в Курске - отдых на Шри-Ланке',
                'seo_description' => 'Туры в Хиккадуву из Курска: серфинг, теплое море и выгодные цены на отдых в 2026 году.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/sri-lanka/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/sri-lanka/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
