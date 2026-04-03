<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranResortSeederThailand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $thailandId = DB::table('zagran_destinations')->where('slug', 'thailand')->value('id');

        $resorts = [];

        if ($thailandId) {
            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Бангкок в Курске',
                'resort_name' => 'Бангкок',
                'sub_title' => 'Городские туры и яркая азиатская атмосфера',
                'img' => null,
                'order' => 1,
                'slug' => 'bangkok',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="62" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Бангкок из Курска - цены 2026',
                'seo_description' => 'Подбор туров в Бангкок из Курска: актуальные цены, удобные даты вылета и лучшие предложения на отдых в Таиланде.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Као Лак в Курске',
                'resort_name' => 'Као Лак',
                'sub_title' => 'Спокойный пляжный отдых у Андаманского моря',
                'img' => null,
                'order' => 2,
                'slug' => 'khao-lak',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="90" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Као Лак из Курска - отдых у моря',
                'seo_description' => 'Туры в Као Лак из Курска: пляжный отдых, подбор отелей и выгодные цены на поездку в Таиланд.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Ко Чанг в Курске',
                'resort_name' => 'Ко Чанг',
                'sub_title' => 'Островной релакс и тропическая природа',
                'img' => null,
                'order' => 3,
                'slug' => 'koh-chang',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="61" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры на Ко Чанг из Курска - лучшие цены',
                'seo_description' => 'Выберите туры на Ко Чанг из Курска: спокойный пляжный отдых, комфортные отели и актуальные цены на сезон 2026.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Краби в Курске',
                'resort_name' => 'Краби',
                'sub_title' => 'Скалы, лагуны и живописные пляжи',
                'img' => null,
                'order' => 4,
                'slug' => 'krabi',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="60" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Краби из Курска - цены и отели',
                'seo_description' => 'Туры в Краби из Курска: живописные пляжи, экскурсии и подбор выгодных предложений на отдых в Таиланде.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Паттайя в Курске',
                'resort_name' => 'Паттайя',
                'sub_title' => 'Активный отдых, море и развлечения',
                'img' => null,
                'order' => 5,
                'slug' => 'pattaya',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="7" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Паттайю из Курска - выгодные предложения',
                'seo_description' => 'Подбор туров в Паттайю из Курска: проверенные отели, удобные даты вылета и актуальные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Пхукет в Курске',
                'resort_name' => 'Пхукет',
                'sub_title' => 'Популярный курорт с лучшими пляжами',
                'img' => null,
                'order' => 6,
                'slug' => 'phuket',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="8" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры на Пхукет из Курска - отдых в Таиланде 2026',
                'seo_description' => 'Туры на Пхукет из Курска: пляжный отдых, семейные и романтические варианты, подбор цен и отелей.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Районг в Курске',
                'resort_name' => 'Районг',
                'sub_title' => 'Тихое побережье и комфортные отели',
                'img' => null,
                'order' => 7,
                'slug' => 'rayong',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="89" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Районг из Курска - цены на отдых',
                'seo_description' => 'Подберите туры в Районг из Курска: спокойные пляжи, комфортные отели и актуальные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Самуи в Курске',
                'resort_name' => 'Самуи',
                'sub_title' => 'Пальмы, бухты и отдых у океана',
                'img' => null,
                'order' => 8,
                'slug' => 'samui',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="9" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры на Самуи из Курска - отдых у моря',
                'seo_description' => 'Туры на Самуи из Курска: красивые пляжи, подбор отелей и выгодные цены на отдых в Таиланде.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Хуа Хин в Курске',
                'resort_name' => 'Хуа Хин',
                'sub_title' => 'Элегантный курорт для спокойного отпуска',
                'img' => null,
                'order' => 9,
                'slug' => 'hua-hin',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="63" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Хуа Хин из Курска - подбор лучших цен',
                'seo_description' => 'Выберите туры в Хуа Хин из Курска: комфортный отдых, хорошие отели и выгодные условия бронирования.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $thailandId,
                'title' => 'Купить туры Чианг Май в Курске',
                'resort_name' => 'Чианг Май',
                'sub_title' => 'Горный север и культурные маршруты',
                'img' => null,
                'order' => 10,
                'slug' => 'chiang-mai',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="2" tv-resorts="519" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры в Чианг Май из Курска - экскурсионный отдых',
                'seo_description' => 'Туры в Чианг Май из Курска: культурные маршруты, экскурсии и подбор оптимальных предложений по цене.',
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
                        'seo_description' => $item['seo_description'] ?? $item['description'],
                    ]
                );
            }
        }
    }
}
