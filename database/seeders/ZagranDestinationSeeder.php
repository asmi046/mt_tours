<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ZagranDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicFlagDir = public_path('zag_info/flag');
        $flagPathByFile = [];
        $publicDestinationDir = public_path('zag_info/distantion');
        $destinationPathByFile = [];
        $publicVideoDir = public_path('video');
        $videoPathByFile = [];

        if (is_dir($publicFlagDir)) {
            foreach (glob($publicFlagDir.'/*') as $sourcePath) {
                if (! is_file($sourcePath)) {
                    continue;
                }

                $fileName = basename($sourcePath);
                $targetPath = 'zag_info/flag/'.$fileName;

                Storage::disk('public')->put($targetPath, file_get_contents($sourcePath), 'public');
                $flagPathByFile[$fileName] = $targetPath;
            }
        }

        if (is_dir($publicDestinationDir)) {
            foreach (glob($publicDestinationDir.'/*') as $sourcePath) {
                if (! is_file($sourcePath)) {
                    continue;
                }

                $fileName = basename($sourcePath);
                $targetPath = 'zag_info/distantion/'.$fileName;

                Storage::disk('public')->put($targetPath, file_get_contents($sourcePath), 'public');
                $destinationPathByFile[$fileName] = $targetPath;
            }
        }

        if (is_dir($publicVideoDir)) {
            foreach (glob($publicVideoDir.'/*') as $sourcePath) {
                if (! is_file($sourcePath)) {
                    continue;
                }

                $fileName = basename($sourcePath);
                $targetPath = 'video/'.$fileName;

                Storage::disk('public')->put($targetPath, file_get_contents($sourcePath), 'public');
                $videoPathByFile[$fileName] = $targetPath;
            }
        }

        $flagFileBySlug = [
            'turkey' => 'turkey-flag.svg',
            'maldives-tours' => 'maldives.svg',
            'uae' => 'united-arab-emirates.svg',
            'maldives-vacation' => 'Flag-Maldives.svg.png',
            'egypt' => 'EG-flag.jpg',
            'venezuela' => 'flag_venesuella-scaled.jpg',
            'sri-lanka' => 'sri-lanka-flag.jpg',
            'cuba' => 'cuba-flag.png',
            'cyprus' => 'cyprus.jpg',
            'tanzania' => 'flag-tanzanii.jpg',
            'thailand' => 'thailand.svg',
            'goa' => 'india.svg',
            'china' => 'china.svg',
            'dominican-republic' => 'Flag_of_the_Dominican_Republic.svg',
            'mexico' => 'mexico.svg',
            'vietnam' => 'vietnam.svg',
            'tunisia' => 'tunisia.svg',
            'greece' => 'greece.svg',
            'abkhazia' => 'flag-abkhazia.jpg',
        ];

        $destinationFileBySlug = [
            'turkey' => 'turcia.webp',
            'maldives-tours' => 'maldivi.webp',
            'uae' => 'oae.webp',
            'maldives-vacation' => 'maldivi.webp',
            'egypt' => 'egipet.webp',
            'venezuela' => 'venisuella.webp',
            'sri-lanka' => 'sheri-lanka.webp',
            'cuba' => 'kuba.webp',
            'cyprus' => 'kipr.webp',
            'tanzania' => 'tanzania.webp',
            'thailand' => 'tailand.webp',
            'goa' => 'goa.webp',
            'china' => 'kitay.webp',
            'dominican-republic' => 'domenikana.webp',
            'mexico' => 'meksika.webp',
            'vietnam' => 'vetnam.webp',
            'tunisia' => 'tunis.webp',
            'greece' => 'gretsia.webp',
            'abkhazia' => 'abhazia.webp',
        ];

        $videoFileBySlug = [
            'egypt' => 'egypt.mp4',
            'thailand' => 'thai.mp4',
            'turkey' => 'turky.mp4',
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('zagran_destinations')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $distantion = [
            [
                'title' => 'Туры в Таиланд',
                'sub_title' => 'Лучшие туры в Таиланд от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Туры в Таиланд купить по выгодной цене в Курске, лучшие передложения на отдых в Таиланде',
                'seo_description' => 'Подберите туры в Таиланд: Пхукет, Паттайя, Самуи, Краби. Актуальные цены, удобные даты вылета, лучшие цены в Курске',
                'name' => 'Таиланд',
                'name_rp' => 'Таиланда',
                'name_vp' => 'Таиланд',
                'img' => $destinationPathByFile[$destinationFileBySlug['thailand']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['thailand']] ?? null,
                'order' => 10,
                'slug' => 'thailand',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Паттайя, Пхукет, Самуи, Краби, Ко Чанг, Бангкок',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="2"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="2"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/tai.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Египте',
                'sub_title' => 'Лучшие туры в Египет от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Египте самые выгодные цены в Курске, туры в Египет онлайн бронирование',
                'seo_description' => 'Туры в Египет: Хургада, Шарм-эль-Шейх и другие курорты. Самые выгодные предложения в Курске на отдых в Египте.',
                'name' => 'Египет',
                'name_rp' => 'Египта',
                'name_vp' => 'Египет',
                'img' => $destinationPathByFile[$destinationFileBySlug['egypt']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['egypt']] ?? null,
                'order' => 20,
                'slug' => 'egypt',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Каир, Гиза',
                'min_days' => '7 дней',
                'min_price' => 20000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="1"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="1"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/egipet.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Шри-Ланке',
                'sub_title' => 'Лучшие туры в Шри-Ланку от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Шри-Ланке самые выгодные цены в Курске, туры в Шри-Ланку онлайн бронирование',
                'seo_description' => 'Туры в Шри-Ланку: Бентота, Коггала, Хиккадува и другие курорты. Самые выгодные предложения в Курске на отдых в Шри-Ланке.',

                'name' => 'Шри-Ланка',
                'name_rp' => 'Шри-Ланки',
                'name_vp' => 'Шри-Ланку',
                'img' => $destinationPathByFile[$destinationFileBySlug['sri-lanka']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['sri-lanka']] ?? null,
                'order' => 30,
                'slug' => 'sri-lanka',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Бентота, Коггала, Хиккадува',
                'min_days' => 'от 5 дней',
                'min_price' => 56494,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="12"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="12"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/lanka.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Туры во Вьетнам',
                'sub_title' => 'Лучшие туры во Вьетнам от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Туры во Вьетнам купить в Курске - Нячанг, Дананг, Фукуок',
                'seo_description' => 'Выберите туры во Вьетнам: пляжный отдых и экскурсии, популярные курорты Нячанг, Дананг, Фукуок. Самые выгодные предложения в Курске на отдых во Вьетнаме.',
                'name' => 'Вьетнам',
                'name_rp' => 'Вьетнама',
                'name_vp' => 'Вьетнам',
                'img' => $destinationPathByFile[$destinationFileBySlug['vietnam']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['vietnam']] ?? null,
                'order' => 40,
                'slug' => 'vietnam',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Нячанг, Дананг',
                'min_days' => 'от 5 дней',
                'min_price' => 25500,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="16"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="16"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/vet.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Туры на Гоа',
                'sub_title' => 'Лучшие туры на Гоа от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Туры на Гоа купить в Курске - отдых по самым выгодным ценам',
                'seo_description' => 'Найдите туры на Гоа и закажите прямо в Курске: пляжный отдых, комфортные отели и выгодные предложения по цене на отдых в Индии.',
                'name' => 'Гоа',
                'name_rp' => 'Гоа',
                'name_vp' => 'Гоа',
                'img' => $destinationPathByFile[$destinationFileBySlug['goa']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['goa']] ?? null,
                'order' => 50,
                'slug' => 'goa',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Гоа',
                'min_days' => 'от 5 дней',
                'min_price' => 30000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="3"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="3"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/goa.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Туры в Китай',
                'sub_title' => 'Лучшие туры в Китай от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Туры в Китай купить в Курске - отдых на Хайнане и поездки в города Китая',
                'seo_description' => 'Подбор туров в Китай: пляжный отдых на Хайнане, экскурсионные маршруты и выгодные цены. Самые выгодные предложения в Курске на отдых в Китае.',

                'name' => 'Китай',
                'name_rp' => 'Китая',
                'name_vp' => 'Китай',
                'img' => $destinationPathByFile[$destinationFileBySlug['china']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['china']] ?? null,
                'order' => 60,
                'slug' => 'china',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Хайнань',
                'min_days' => 'от 5 дней',
                'min_price' => 38800,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="13"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="13"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/kitay.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в ОАЭ',
                'name_rp' => 'ОАЭ',
                'name_vp' => 'ОАЭ',
                'sub_title' => 'Лучшие туры в ОАЭ от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в ОАЭ купить в Курске - туры в Дубай и другие эмираты',
                'seo_description' => 'Выберите туры в ОАЭ: Дубай, Абу-Даби, Фуджейра и другие курорты. Самые выгодные предложения в Курске на отдых в ОАЭ.',

                'name' => 'ОАЭ',
                'img' => $destinationPathByFile[$destinationFileBySlug['uae']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['uae']] ?? null,
                'order' => 70,
                'slug' => 'uae',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Дубай, Фуджейра',
                'min_days' => 'от 5 дней',
                'min_price' => 30000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="9"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="9"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/oae.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Туры на Мальдивы',
                'name_rp' => 'Мальдив',
                'name_vp' => 'Мальдивы',
                'sub_title' => 'Лучшие туры на Мальдивы от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Туры на Мальдивы купить в Курске - выгодные цены на отдых',
                'seo_description' => 'Подбор туров на Мальдивы: отели на островах, пакетные предложения и актуальные цены на отдых. Самые выгодные предложения в Курске на отдых на Мальдивах.',

                'name' => 'Мальдивы',
                'img' => $destinationPathByFile[$destinationFileBySlug['maldives-tours']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['maldives-tours']] ?? null,
                'order' => 80,
                'slug' => 'maldives-tours',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Мальдивы',
                'min_days' => 'от 5 дней',
                'min_price' => 38800,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country=""></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries=""></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/maldivi.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Турции',
                'sub_title' => 'Лучшие туры в Турцию от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Турции купить в Курске - туры из Москвы в Анталию и Кемер',
                'seo_description' => 'Туры в Турцию с вылетом из Москвы: Анталия, Кемер и другие курорты. Самые выгодные предложения в Курске на отдых в Турции.',

                'name' => 'Турция',
                'name_rp' => 'Турции',
                'name_vp' => 'Турцию',
                'img' => $destinationPathByFile[$destinationFileBySlug['turkey']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['turkey']] ?? null,
                'order' => 90,
                'slug' => 'turkey',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Кемер, Анталия',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="4"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="4"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/turkys.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в Мексике',
                'sub_title' => 'Лучшие туры в Мексику от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Мексике купить в Курске - туры в Канкун, Лос-Кабос и Мехико',
                'seo_description' => 'Подберите туры в Мексику: Канкун, Косумель, Лос-Кабос, Мехико. Самые выгодные предложения в Курске на отдых в Мексике.',

                'name' => 'Мексика',
                'name_rp' => 'Мексики',
                'name_vp' => 'Мексику',
                'img' => $destinationPathByFile[$destinationFileBySlug['mexico']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['mexico']] ?? null,
                'order' => 100,
                'slug' => 'mexico',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Лос Кабос, Кункун, Мехико',
                'min_days' => 'от 7 дней',
                'min_price' => 46000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="18"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="18"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/mex.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в Абхазии',
                'sub_title' => 'Лучшие туры в Абхазию от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Абхазии купить в Курске - туры в Гагру, Пицунду и Сухум',
                'seo_description' => 'Туры в Абхазию с удобными датами выезда: Гагра, Пицунда, Сухум и другие курорты. Самые выгодные предложения в Курске на отдых в Абхазии.',
                'name' => 'Абхазия',
                'name_rp' => 'Абхазии',
                'name_vp' => 'Абхазию',
                'img' => $destinationPathByFile[$destinationFileBySlug['abkhazia']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['abkhazia']] ?? null,
                'order' => 110,
                'slug' => 'abkhazia',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Гагра, Пицунда, Сухум',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="46"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="46"></div>',
                'description' => file_get_contents(public_path('zag_info/distantion/abh.html')),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Тунисе',
                'sub_title' => 'Лучшие туры в Тунис от ведущих туроператоров по выгодным ценам в Курске',
                'seo_title' => 'Отдых в Тунисе купить в Курске - туры в Махдию и Джербу',
                'seo_description' => 'Туры в Тунис с удобными датами выезда: Махдия, Джерба и другие курорты. Самые выгодные предложения в Курске на отдых в Тунисе.',
                'name' => 'Тунис',
                'name_rp' => 'Туниса',
                'name_vp' => 'Тунис',
                'img' => $destinationPathByFile[$destinationFileBySlug['tunisia']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['tunisia']] ?? null,
                'order' => 170,
                'slug' => 'tunisia',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Махдия, Джерба',
                'min_days' => 'от 5 дней',
                'min_price' => 80000,
                'search_script' => '<div class="tv-search-form" tv-type="2" tv-theme="theme2" tv-departure="1" tv-resultinwindow="0" tv-pricetype="0" tv-country="5"></div>',
                'hot_tours_script' => '<div class="tv-hot-tours" tv-view="2" tv-rows="8" tv-width="auto" tv-imgpos="1" tv-theme="theme1" tv-showfilter="1" tv-departure1="32" tv-departure="1" tv-departure2="26" tv-countries="5"></div>',

                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // [
            //     'title' => 'Отдых в Венесуэле',
            //     'name' => 'Венесуэла',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['venezuela']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['venezuela']] ?? null,
            //     'order' => 6,
            //     'slug' => 'venezuela',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Маргарита',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 26000,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // [
            //     'title' => 'Отдых на Кубе',
            //     'name' => 'Куба',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['cuba']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['cuba']] ?? null,
            //     'order' => 8,
            //     'slug' => 'cuba',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Гавана, Варадеро, Кайо-Гильермо',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 25000,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'title' => 'Отдых на Кипре',
            //     'name' => 'Кипр',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['cyprus']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['cyprus']] ?? null,
            //     'order' => 9,
            //     'slug' => 'cyprus',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Айя-Напа, Пафос, Протарас',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 33800,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'title' => 'Отдых в Танзании',
            //     'name' => 'Танзания',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['tanzania']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['tanzania']] ?? null,
            //     'order' => 10,
            //     'slug' => 'tanzania',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Мванза, Аруша, Кендва',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 32000,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // [
            //     'title' => 'Туры в Доминикану',
            //     'name' => 'Доминиканская Республика',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['dominican-republic']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['dominican-republic']] ?? null,
            //     'order' => 14,
            //     'slug' => 'dominican-republic',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Пунта Кана, Бока Чика, Ла Романа',
            //     'min_days' => 'от 7 дней',
            //     'min_price' => 46000,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // [
            //     'title' => 'Туры в Грецию',
            //     'name' => 'Греция',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['greece']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['greece']] ?? null,
            //     'order' => 18,
            //     'slug' => 'greece',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Крит, Афины',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 38800,
            //     'search_script' => null,
            //     'hot_tours_script' => null,
            //     'description' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

        ];

        foreach ($distantion as &$item) {
            $videoFile = $videoFileBySlug[$item['slug']] ?? null;
            $item['video'] = $videoFile ? ($videoPathByFile[$videoFile] ?? null) : null;
        }
        unset($item);

        $destinationRows = array_map(static function (array $item): array {
            unset($item['seo_title'], $item['seo_description']);

            return $item;
        }, $distantion);

        DB::table('zagran_destinations')->insert($destinationRows);

        foreach ($distantion as $item) {
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
