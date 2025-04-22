<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                'order' => 10,
                'dir' => 'moscow',
                'title' => 'Москва + парк Патриот + ВДНХ выставка «Россия» на майские праздники из Курска',
                'slug' => "Москва + парк Патриот тур из Курска",
                'deys' => 1,
                'video' => "video.mp4",
                'img' => "1.jpg",
                'start_data'=> "28.04.2025",
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 4500, 'comment' => 'Детям до 16 лет'],
                    ['price' => 5000, 'comment' => 'Стандарт']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Столица!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Россия!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Весна :)", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Давай с нами :)", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                ]
            ],

            [
                'order' => 9,
                'dir' => 'alpaka',
                'title' => 'Альпака парк + Корабль Петра I',
                'slug' => 'Альпака парк + Корабль Петра I тур из Курска',
                'deys' => 1,
                'video' => "video.mp4",
                'img' => "1.jpg",
                'start_data'=> "29.04.2025",
                'prices' => [
                    ['price' => 3000, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Альпаки!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Милота!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Красота!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Поехали с нами :)", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 8,
                'dir' => 'bogatiri',
                'title' => 'Богатырская застава. Катание на ладье. Богатыри',
                'slug' => "Тур богатырская застава из Куоска на майские",
                'deys' => 1,
                'img' => "1.jpg",
                // 'video' => "video.mp4",
                'start_data'=> "01.05.2025",
                'prices' => [
                    ['price' => 3000, 'comment' => 'Взрослые'],
                    ['price' => 2900, 'comment' => 'детям до 16 лет']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Богатыри!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Радушие!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Приключения!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Русский дух!", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 7,
                'dir' => 'rusborg',
                'title' => 'РУСБОРГ — исторический фестиваль',
                'slug' => "Тур РУСБОРГ — исторический фестиваль из Куоска на майские",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "11.05.2025",
                'video' => "video.mp4",
                'prices' => [
                    ['price' => 2500, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Фестиваль!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "История...", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Культура :)", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Поехали!", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.webp", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "17.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 6,
                'dir' => 'matrona',
                'title' => 'Матрона Московская + Всецарица (5 апреля, 19 апреля)',
                'slug' => "Тур Матрона Московская из Куоска на майские",
                'deys' => 1,
                'video' => "video.mp4",
                'img' => "1.jpg",
                'start_data'=> "05.04.2025",
                'page_bg' => 'moskow_bg',
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-04-05"],
                    ["#" => null,"start_data" => "2025-04-19"]
                ]),

                'prices' => [
                    ['price' => 3500, 'comment' => '(5 апреля) дети до 16 лет'],
                    ['price' => 4000, 'comment' => '(5 апреля) взрослые'],
                    ['price' => 3500, 'comment' => '(19 апреля) дети до 16 лет'],
                    ['price' => 4000, 'comment' => '(19 апреля) взрослые']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Матрона Московская", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Православный тур", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Вера!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Духовный рост", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 5,
                'dir' => 'kudikina_gora',
                'title' => 'Кудыкина гора на майские праздники',
                'slug' => "Тур Кудыкина гора из Куоска на майские",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "10.05.2025",
                'page_bg' => 'kudikina_bg',
                'video' => "video.mp4",
                'prices' => [
                    ['price' => 2500, 'comment' => 'Стандартная цена']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Приключения", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Впечатления", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Весенний Вайп :)", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Свежий воздух", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 4,
                'dir' => 'volgograd',
                'title' => 'Тур в Волгоград на майские праздники 2025 из Курска',
                'slug' => "Тур в Волгоград из Куоска на майские",
                'deys' => 1,
                'img' => "1.jpg",
                'video' => "video.mp4",
                'start_data'=> "01.05.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-05-01"],
                    ["#" => null,"start_data" => "2025-05-09"]
                ]),
                'page_bg' => 'volgograd_bg',
                'prices' => [
                    ['price' => 8000, 'comment' => 'детям до 16 лет (1 мая)'],
                    ['price' => 8500, 'comment' => 'взрослые (1 мая)'],
                    ['price' => 8500, 'comment' => 'детям до 16 лет (9 мая)'],
                    ['price' => 9000, 'comment' => 'взрослые (9 мая)']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Присоединяйтесь...", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Патриотизм!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Мужество!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Героизм!", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 3,
                'dir' => 'kazan',
                'title' => 'Автобусный тур Казань + Йошкар-Ола + Остров-град Свияжск',
                'slug' => "Тур в Казань из Куоска на майские",
                'deys' => 2,
                'video' => "video.mp4",
                'img' => "2.jpg",
                'start_data'=> "08.05.2025","12.06.2025",
                'prices' => [
                    ['price' => 25000, 'comment' => 'дети до 16 лет'],
                    ['price' => 25500, 'comment' => 'взрослые'],
                    ['price' => 29500, 'comment' => '1-местн. размещение'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Добро-пожаловать!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Архитектура", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "История", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Приключения!", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "17.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "18.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "19.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "20.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "21.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "22.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "23.jpeg", 'title' => "", 'in_top' => false],
                    ['img' => "23.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "24.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "25.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "26.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 2,
                'dir' => 'piter',
                'title' => 'Санкт-Петербург на майские праздники из Курска Открытие фонтанов Петергофа + теплоход',
                'slug' => "Тур в Санкт-Петербург из Куоска на майские",
                'deys' => 3,
                'video' => "video.mp4",
                'img' => "1.jpg",
                'start_data'=> "30.04.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-04-30"],
                    ["#" => null,"start_data" => "2025-05-07"]
                ]),
                'page_bg' => 'spb_bg',
                'prices' => [
                    ['price' => 26000, 'comment' => 'дети до 16 лет'],
                    ['price' => 26500, 'comment' => 'взрослые'],
                    ['price' => 29500, 'comment' => '1-местн. размещение'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Архитектура!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Наша история!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Супер Вайп!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Присоединяйтесь...", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 1,
                'dir' => 'adigea',
                'out_lnk' => 'https://adygea.mirturizma46.ru/',
                'title' => 'Тур в Адыгею из Курска',
                'slug' => "Тур в Адыгею из Куоска на майские",
                'deys' => 3,
                'img' => "1.jpg",
                'start_data'=> "30.04.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-04-30"],
                    ["#" => null,"start_data" => "2025-05-07"]
                ]),
                'prices' => [
                    ['price' => 20000, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "", 'in_top' => true],
                ]
            ],
            [
                'order' => 2,
                'dir' => 'belarus',
                'title' => 'Беларусь на Майские праздники 2025',
                'slug' => "Тур в Беларусь 2025 из Куоска на майские",
                'deys' => 2,
                'img' => "10.jpg",
                'video' => "video.mp4",
                'start_data'=> "01.05.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-05-01"],
                    ["#" => null,"start_data" => "2025-05-08"]
                ]),
                'prices' => [
                    ['price' => 11000, 'comment' => '1 день. 8-10 мая (до 16 лет)'],
                    ['price' => 11500, 'comment' => '1 день. 8-10 мая (взрослые)'],
                    ['price' => 23500, 'comment' => '2 дня. 1-4 мая (до 16 лет)'],
                    ['price' => 24000, 'comment' => '2 дня. 1-4 мая (взрослые)'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'order' => 2,
                'dir' => 'gastrotur',
                'title' => 'ГастроТур «Кофе. Хлеб и Вино» из Курска',
                'slug' => "ГастроТур из Куоска на майские",
                'deys' => 1,
                'img' => "hleb.webp",
                'video' => "video.mp4",
                'start_data'=> "01.05.2025",
                'prices' => [
                    ['price' => 5900, 'comment' => 'дети до 16 лет'],
                    ['price' => 6100, 'comment' => 'взрослые'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "17.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "18.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "19.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "20.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
        ];

        $index = 0;
        foreach ($data as $item) {

            $main_img = "tours/".$index."_".$item['img'];
            Storage::disk('public')->put($main_img, file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$item['img'])), 'public');
            $inserted_galery = [];

            foreach ($item['galery'] as $galery_item) {
                Storage::disk('public')->put("tours/".$index."_".$galery_item['img'], file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$galery_item['img'])), 'public');
                $galery_item['img'] = "tours/".$index."_".$galery_item['img'];
                $inserted_galery[] = $galery_item;
            }

            if (isset($item['video'])) {
                Storage::disk('public')->put("tours/".$index."_".$item['dir'].".mp4", file_get_contents(public_path('tour_info/'.$item['dir'].'/'.$item['video'])), 'public');
            }

            $inserted_item = [
                'order' => $item['order'],
                'header_bg' => isset($item['video'])?"tours/".$index."_".$item['dir'].".mp4":null,
                'out_lnk' => isset($item['out_lnk'])?$item['out_lnk']:null,
                'page_bg' => isset($item['page_bg'])?$item['page_bg']:null,
                'title' => $item['title'],
                'title_input' => $item['title'],
                'slug' => Str::slug($item['slug']),
                'img' => $main_img,
                'deycount' => $item['deys'],
                'start_data' => date("Y-m-d", strtotime($item['start_data'])),
                'multi_data' => isset($item['multi_data'])?$item['multi_data']: null ,
                'top_description' => file_get_contents(public_path('tour_info/'.$item['dir'].'/top.html')),
                'program' => file_get_contents(public_path('tour_info/'.$item['dir'].'/program.html')),
                'in_price' => file_exists(public_path('tour_info/'.$item['dir'].'/in_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/in_price.html')):null,
                'out_price' => file_exists(public_path('tour_info/'.$item['dir'].'/out_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/out_price.html')):null,
                'galery' => json_encode($inserted_galery),
                'prices' => json_encode($item['prices'])
            ];

            $index ++;
            DB::table("seo_data")->insert(
                [
                    'url' => 'tours/'.Str::slug($item['title']),
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
            DB::table("tours")->insert($inserted_item);
        }

    }
}
