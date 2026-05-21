<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ZagranResortSeederTurkey extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $turkeyId = DB::table('zagran_destinations')->where('slug', 'turkey')->value('id');
        $videoPath = null;
        $sourceVideoPath = public_path('video/turky.mp4');

        if (is_file($sourceVideoPath)) {
            $videoPath = 'video/turky.mp4';
            Storage::disk('public')->put($videoPath, file_get_contents($sourceVideoPath), 'public');
        }

        $resorts = [];

        if ($turkeyId) {
            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Алания в Курске',
                'resort_name' => 'Алания',
                'sub_title' => 'Пляжный отдых на Средиземном море',
                'img' => null,
                'order' => 1,
                'slug' => 'alanya',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="19" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Алания в Курске - цены 2026',
                'seo_description' => 'Туры в Аланию из Курска: пляжный отдых, удобные даты вылета и выгодные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Анталия в Курске',
                'resort_name' => 'Анталия',
                'sub_title' => 'Популярный курорт с развитой инфраструктурой',
                'img' => null,
                'order' => 2,
                'slug' => 'antalya',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="20" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Анталия в Курске - лучшие цены',
                'seo_description' => 'Подберите туры в Анталию из Курска: хорошие отели, комфортный перелет и актуальные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Белек в Курске',
                'resort_name' => 'Белек',
                'sub_title' => 'Премиальный отдых и семейные отели',
                'img' => null,
                'order' => 3,
                'slug' => 'belek',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="21" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Белек в Курске - отдых в Турции 2026',
                'seo_description' => 'Туры в Белек из Курска: высокий уровень сервиса, пляжи и выгодные условия бронирования.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Бодрум в Курске',
                'resort_name' => 'Бодрум',
                'sub_title' => 'Эгейское побережье и стильный отдых',
                'img' => null,
                'order' => 4,
                'slug' => 'bodrum',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="24" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Бодрум в Курске - цены и отели',
                'seo_description' => 'Выберите туры в Бодрум из Курска: живописные бухты, комфортные отели и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Дидим в Курске',
                'resort_name' => 'Дидим',
                'sub_title' => 'Спокойные пляжи и доступный отдых',
                'img' => null,
                'order' => 5,
                'slug' => 'didim',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="155" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Дидим в Курске - выгодные предложения',
                'seo_description' => 'Туры в Дидим из Курска: спокойный морской отдых, выбор отелей и хорошие цены на сезон.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Измир в Курске',
                'resort_name' => 'Измир',
                'sub_title' => 'Городской отдых и экскурсионные маршруты',
                'img' => null,
                'order' => 6,
                'slug' => 'izmir',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="306" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Измир в Курске - туры в Турцию',
                'seo_description' => 'Подбор туров в Измир из Курска: удобные программы отдыха, экскурсии и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Кемер в Курске',
                'resort_name' => 'Кемер',
                'sub_title' => 'Горы, море и отели all inclusive',
                'img' => null,
                'order' => 7,
                'slug' => 'kemer',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="22" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Кемер в Курске - отдых у моря',
                'seo_description' => 'Туры в Кемер из Курска: чистые пляжи, горные пейзажи и выгодные цены на отдых в Турции.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Кушадасы в Курске',
                'resort_name' => 'Кушадасы',
                'sub_title' => 'Комфортные пляжи на Эгейском побережье',
                'img' => null,
                'order' => 8,
                'slug' => 'kusadasi',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="154" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Кушадасы в Курске - цены 2026',
                'seo_description' => 'Выберите туры в Кушадасы из Курска: современные отели, морской отдых и привлекательные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Мармарис в Курске',
                'resort_name' => 'Мармарис',
                'sub_title' => 'Яхтенный курорт и активный отдых',
                'img' => null,
                'order' => 9,
                'slug' => 'marmaris',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="26" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Мармарис в Курске - лучшие предложения',
                'seo_description' => 'Туры в Мармарис из Курска: яркий отдых, море и качественные отели по выгодной стоимости.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Сиде в Курске',
                'resort_name' => 'Сиде',
                'sub_title' => 'Пляжный отдых и античные достопримечательности',
                'img' => null,
                'order' => 10,
                'slug' => 'side',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="23" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Сиде в Курске - отдых в Турции',
                'seo_description' => 'Подберите туры в Сиде из Курска: море, исторические места и выгодные предложения на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Стамбул в Курске',
                'resort_name' => 'Стамбул',
                'sub_title' => 'Город контрастов и насыщенных экскурсий',
                'img' => null,
                'order' => 11,
                'slug' => 'istanbul',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="277" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Стамбул в Курске - экскурсионный отдых',
                'seo_description' => 'Туры в Стамбул из Курска: культурные маршруты, комфортные отели и актуальные цены на поездку.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Улудаг в Курске',
                'resort_name' => 'Улудаг',
                'sub_title' => 'Горнолыжный отдых в Турции',
                'img' => null,
                'order' => 12,
                'slug' => 'uludag',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="268" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Улудаг в Курске - зимний отдых 2026',
                'seo_description' => 'Выберите туры в Улудаг из Курска: горнолыжные трассы, отели и выгодные цены на зимний сезон.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Фетхие в Курске',
                'resort_name' => 'Фетхие',
                'sub_title' => 'Лазурные бухты и красивое побережье',
                'img' => null,
                'order' => 13,
                'slug' => 'fethiye',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="27" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Фетхие в Курске - цены на отдых',
                'seo_description' => 'Туры в Фетхие из Курска: живописные пляжи, комфортные отели и оптимальные предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Чешме в Курске',
                'resort_name' => 'Чешме',
                'sub_title' => 'Эгейский курорт с термальными источниками',
                'img' => null,
                'order' => 14,
                'slug' => 'cesme',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="156" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Чешме в Курске - отдых у моря',
                'seo_description' => 'Подбор туров в Чешме из Курска: морской климат, качественные отели и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $turkeyId,
                'title' => 'Купить туры Эрзурум в Курске',
                'resort_name' => 'Эрзурум',
                'sub_title' => 'Горный и зимний отдых в Турции',
                'img' => null,
                'order' => 15,
                'slug' => 'erzurum',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="4" tv-resorts="278" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Эрзурум в Курске - зимние туры 2026',
                'seo_description' => 'Туры в Эрзурум из Курска: горнолыжные курорты, хорошие отели и выгодные цены на зимний отдых.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/turkey/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/turkey/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
