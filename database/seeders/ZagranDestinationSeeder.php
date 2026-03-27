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

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('zagran_destinations')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('zagran_destinations')->insert([
            [
                'title' => 'Туры в Таиланд',
                'name' => 'Таиланд',
                'img' => $destinationPathByFile[$destinationFileBySlug['thailand']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['thailand']] ?? null,
                'order' => 10,
                'slug' => 'thailand',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Паттайя, Пхукет, Самуи, Краби, Ко Чанг, Бангкок',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Египте',
                'name' => 'Египет',
                'img' => $destinationPathByFile[$destinationFileBySlug['egypt']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['egypt']] ?? null,
                'order' => 20,
                'slug' => 'egypt',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Каир, Гиза',
                'min_days' => '7 дней',
                'min_price' => 20000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Шри-Ланке',
                'name' => 'Шри-Ланка',
                'img' => $destinationPathByFile[$destinationFileBySlug['sri-lanka']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['sri-lanka']] ?? null,
                'order' => 30,
                'slug' => 'sri-lanka',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Бентота, Коггала, Хиккадува',
                'min_days' => 'от 5 дней',
                'min_price' => 56494,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Туры во Вьетнам',
                'name' => 'Вьетнам',
                'img' => $destinationPathByFile[$destinationFileBySlug['vietnam']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['vietnam']] ?? null,
                'order' => 40,
                'slug' => 'vietnam',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Нячанг, Дананг',
                'min_days' => 'от 5 дней',
                'min_price' => 25500,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Туры на Гоа',
                'name' => 'Гоа',
                'img' => $destinationPathByFile[$destinationFileBySlug['goa']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['goa']] ?? null,
                'order' => 50,
                'slug' => 'goa',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Гоа',
                'min_days' => 'от 5 дней',
                'min_price' => 30000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Туры в Китай',
                'name' => 'Китай',
                'img' => $destinationPathByFile[$destinationFileBySlug['china']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['china']] ?? null,
                'order' => 60,
                'slug' => 'china',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Хайнань',
                'min_days' => 'от 5 дней',
                'min_price' => 38800,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в ОАЭ',
                'name' => 'ОАЭ',
                'img' => $destinationPathByFile[$destinationFileBySlug['uae']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['uae']] ?? null,
                'order' => 70,
                'slug' => 'uae',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Дубай, Фуджейра',
                'min_days' => 'от 5 дней',
                'min_price' => 30000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Туры на Мальдивы',
                'name' => 'Мальдивы',
                'img' => $destinationPathByFile[$destinationFileBySlug['maldives-tours']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['maldives-tours']] ?? null,
                'order' => 80,
                'slug' => 'maldives-tours',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Мальдивы',
                'min_days' => 'от 5 дней',
                'min_price' => 38800,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Отдых в Турции',
                'name' => 'Турция',
                'img' => $destinationPathByFile[$destinationFileBySlug['turkey']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['turkey']] ?? null,
                'order' => 90,
                'slug' => 'turkey',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Кемер, Анталия',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в Мексике',
                'name' => 'Мексика',
                'img' => $destinationPathByFile[$destinationFileBySlug['mexico']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['mexico']] ?? null,
                'order' => 100,
                'slug' => 'mexico',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Лос Кабос, Кункун, Мехико',
                'min_days' => 'от 7 дней',
                'min_price' => 46000,
                'search_script' => null,
                'hot_tours_script' => null,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Отдых в Абхазии',
                'name' => 'Абхазия',
                'img' => $destinationPathByFile[$destinationFileBySlug['abkhazia']] ?? null,
                'flag' => $flagPathByFile[$flagFileBySlug['abkhazia']] ?? null,
                'order' => 110,
                'slug' => 'abkhazia',
                'departure_cities' => 'из Москвы',
                'resorts_list' => 'Гагра, Пицунда, Сухум',
                'min_days' => 'от 5 дней',
                'min_price' => 16000,
                'search_script' => null,
                'hot_tours_script' => null,
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
            //     'title' => 'Отдых в Тунисе',
            //     'name' => 'Тунис',
            //     'img' => $destinationPathByFile[$destinationFileBySlug['tunisia']] ?? null,
            //     'flag' => $flagPathByFile[$flagFileBySlug['tunisia']] ?? null,
            //     'order' => 17,
            //     'slug' => 'tunisia',
            //     'departure_cities' => 'из Москвы',
            //     'resorts_list' => 'Махдия, Джерба',
            //     'min_days' => 'от 5 дней',
            //     'min_price' => 16000,
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

        ]);
    }
}
