<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ZagranResortSeederTunisia extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tunisiaId = DB::table('zagran_destinations')->where('slug', 'tunisia')->value('id');
        $videoPath = null;
        $sourceVideoPath = public_path('video/tunisia.mp4');

        if (is_file($sourceVideoPath)) {
            $videoPath = 'video/tunisia.mp4';
            Storage::disk('public')->put($videoPath, file_get_contents($sourceVideoPath), 'public');
        }

        $resorts = [];

        if ($tunisiaId) {
            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Гаммарт в Курске',
                'resort_name' => 'Гаммарт',
                'sub_title' => 'Побережье рядом с Тунисом и премиальные отели',
                'img' => null,
                'order' => 1,
                'slug' => 'gammarth',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="323" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Гаммарт в Курске - отдых в Тунисе',
                'seo_description' => 'Туры в Гаммарт из Курска: комфортные отели, море и выгодные предложения на отдых в Тунисе.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Джерба в Курске',
                'resort_name' => 'Джерба',
                'sub_title' => 'Островной отдых с песчаными пляжами',
                'img' => null,
                'order' => 2,
                'slug' => 'djerba',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="153" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Джерба в Курске - цены 2026',
                'seo_description' => 'Подберите туры на Джербу из Курска: теплое море, хорошие отели и актуальные цены на отдых.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Махдия в Курске',
                'resort_name' => 'Махдия',
                'sub_title' => 'Спокойный курорт с чистыми пляжами',
                'img' => null,
                'order' => 3,
                'slug' => 'mahdia',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="28" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Махдия в Курске - выгодные туры',
                'seo_description' => 'Туры в Махдию из Курска: спокойная атмосфера, удобные даты вылета и выгодные предложения.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Монастир в Курске',
                'resort_name' => 'Монастир',
                'sub_title' => 'Исторический город и пляжный отдых',
                'img' => null,
                'order' => 4,
                'slug' => 'monastir',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="29" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Монастир в Курске - лучшие цены',
                'seo_description' => 'Выберите туры в Монастир из Курска: море, экскурсии и комфортный отдых в Тунисе.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Сусс в Курске',
                'resort_name' => 'Сусс',
                'sub_title' => 'Активный курорт с насыщенной инфраструктурой',
                'img' => null,
                'order' => 5,
                'slug' => 'sousse',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="30" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Сусс в Курске - отдых в Тунисе',
                'seo_description' => 'Туры в Сусс из Курска: пляжи, развлечения и выгодные цены на отдых в Тунисе.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Табарка в Курске',
                'resort_name' => 'Табарка',
                'sub_title' => 'Живописное побережье и спокойный отдых',
                'img' => null,
                'order' => 6,
                'slug' => 'tabarka',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="322" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Табарка в Курске - цены 2026',
                'seo_description' => 'Подберите туры в Табарку из Курска: уютные отели, море и комфортный отдых в Тунисе.',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $resorts[] = [
                'zagran_destination_id' => $tunisiaId,
                'title' => 'Купить туры Хаммамет в Курске',
                'resort_name' => 'Хаммамет',
                'sub_title' => 'Один из самых популярных курортов Туниса',
                'img' => null,
                'order' => 7,
                'slug' => 'hammamet',
                'video' => $videoPath,
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="1" tv-rows="10" tv-width="auto" tv-imgpos="1" tv-showfilters="" tv-borderwidth="false" tv-countries="17" tv-resorts="31" tv-departure="32" tv-departure2="1" tv-departure3="26"></div>',
                'description' => null,
                'seo_title' => 'Купить туры Хаммамет в Курске - выгодные предложения',
                'seo_description' => 'Туры в Хаммамет из Курска: пляжный отдых, качественные отели и лучшие цены на сезон.',
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
                    ['url' => 'poisk-turov-on-line-v-kurske/tunisia/'.$item['slug']],
                    [
                        'url' => 'poisk-turov-on-line-v-kurske/tunisia/'.$item['slug'],
                        'seo_title' => $item['seo_title'] ?? $item['title'],
                        'seo_description' => $item['seo_description'] ?? $item['sub_title'],
                    ]
                );
            }
        }
    }
}
