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
                'title' => 'Купить туры Канкун в Курске',
                'resort_name' => 'Канкун',
                'sub_title' => 'Карибские пляжи и яркий курортный отдых',
                'img' => null,
                'order' => 1,
                'slug' => 'cancun',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="106" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Канкун в Курске - цены 2026',
                'seo_description' => 'Туры в Канкун из Курска: карибское море, комфортные отели и лучшие предложения по цене.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Купить туры Косумель в Курске',
                'resort_name' => 'Косумель',
                'sub_title' => 'Островной отдых и дайвинг на Карибах',
                'img' => null,
                'order' => 2,
                'slug' => 'cozumel',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="319" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Косумель в Курске - отдых у моря',
                'seo_description' => 'Подберите туры в Косумель из Курска: пляжи, дайвинг и выгодные цены на отдых в Мексике.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Купить туры Лос Кабос в Курске',
                'resort_name' => 'Лос Кабос',
                'sub_title' => 'Премиальный отдых на побережье Тихого океана',
                'img' => null,
                'order' => 3,
                'slug' => 'los-cabos',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="320" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Лос Кабос в Курске - лучшие предложения',
                'seo_description' => 'Туры в Лос Кабос из Курска: высокий уровень сервиса, океанские пляжи и актуальные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Купить туры Мехико в Курске',
                'resort_name' => 'Мехико',
                'sub_title' => 'Городские экскурсии и культурные маршруты',
                'img' => null,
                'order' => 4,
                'slug' => 'mexico-city',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="318" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Мехико в Курске - экскурсионный отдых',
                'seo_description' => 'Выберите туры в Мехико из Курска: насыщенные программы, достопримечательности и выгодные цены.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Купить туры Плайя Дель Кармен в Курске',
                'resort_name' => 'Плайя Дель Кармен',
                'sub_title' => 'Карибский курорт с белыми пляжами',
                'img' => null,
                'order' => 5,
                'slug' => 'playa-del-carmen',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="107" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Плайя Дель Кармен в Курске - цены',
                'seo_description' => 'Туры в Плайя Дель Кармен из Курска: теплое море, комфортные отели и выгодные условия бронирования.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $mexicoId,
                'title' => 'Купить туры Ривьера Майя в Курске',
                'resort_name' => 'Ривьера Майя',
                'sub_title' => 'Лучшие пляжи и курорты Карибского побережья',
                'img' => null,
                'order' => 6,
                'slug' => 'riviera-maya',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="18" tv-resorts="108" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Ривьера Майя в Курске - отдых 2026',
                'seo_description' => 'Подбор туров в Ривьера Майя из Курска: пляжный отдых, карибская атмосфера и актуальные цены.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/mexico/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/mexico/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
