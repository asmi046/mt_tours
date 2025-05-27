<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("calendar/belorus.jpg", file_get_contents(public_path('tour_info/calendar_img/belorus.jpg')), 'public');
        Storage::disk('public')->put("calendar/rb.jpg", file_get_contents(public_path('tour_info/calendar_img/rb.jpg')), 'public');
        Storage::disk('public')->put("calendar/volgograd.jpg", file_get_contents(public_path('tour_info/calendar_img/volgograd.jpg')), 'public');
        Storage::disk('public')->put("calendar/spb.webp", file_get_contents(public_path('tour_info/calendar_img/spb.webp')), 'public');
        Storage::disk('public')->put("calendar/mos.jpg", file_get_contents(public_path('tour_info/calendar_img/mos.jpg')), 'public');
        Storage::disk('public')->put("calendar/adigeya.jpg", file_get_contents(public_path('tour_info/calendar_img/adigeya.jpg')), 'public');
        Storage::disk('public')->put("calendar/adigeya_2.jpg", file_get_contents(public_path('tour_info/calendar_img/adigeya_2.jpg')), 'public');
        Storage::disk('public')->put("calendar/kudikina.jpg", file_get_contents(public_path('tour_info/calendar_img/kudikina.jpg')), 'public');
        Storage::disk('public')->put("calendar/tula.jpg", file_get_contents(public_path('tour_info/calendar_img/tula.jpg')), 'public');
        Storage::disk('public')->put("calendar/matrona.webp", file_get_contents(public_path('tour_info/calendar_img/matrona.webp')), 'public');
        Storage::disk('public')->put("calendar/alpaki.jpg", file_get_contents(public_path('tour_info/calendar_img/alpaki.jpg')), 'public');
        Storage::disk('public')->put("calendar/kazan.jpg", file_get_contents(public_path('tour_info/calendar_img/kazan.jpg')), 'public');
        Storage::disk('public')->put("calendar/bred.webp", file_get_contents(public_path('tour_info/calendar_img/bred.webp')), 'public');

        $data = [
            [
                'title' => 'Кудыкина гора',
                'post_lnk' => '/tour/kudykina-gora',
                'post_thumbinal' => "calendar/kudikina.jpg",
                'dey_count' => null,
                'price' => '2500',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-31",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "6",
                    ]
                ]),
            ],

            [
                'title' => 'Матрона + Всецарица',
                'post_lnk' => '/tour/matrona',
                'post_thumbinal' => "calendar/matrona.webp",
                'dey_count' => null,
                'price' => '3500',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-18",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-08",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-14",
                        "position" => "6",
                    ]
                ]),
            ],

            [
                'title' => 'Тула',
                'post_lnk' => '/tour/tula',
                'post_thumbinal' => "calendar/tula.jpg",
                'dey_count' => null,
                'price' => '3800',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-08",
                        "position" => "3",
                    ],

                    [
                        "date" => "2025-05-11",
                        "position" => "5",
                    ]
                ]),
            ],

            [
                'title' => 'Беларусь + замки',
                'post_lnk' => '/tour/belarus-2025',
                'post_thumbinal' => "calendar/belorus.jpg",
                'dey_count' => null,
                'price' => 'от 25 000',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-08",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-05-09",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-05-10",
                        "position" => "2",
                    ],
                ]),
            ],

            [
                'title' => 'Адыгея',
                'post_lnk' => '/tour/adygea',
                'post_thumbinal' => "calendar/adigeya.jpg",
                'dey_count' => null,
                'price' => 'от 20 000',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-07",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-05-08",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-05-09",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-05-10",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-05-11",
                        "position" => "3",
                    ]
                ]),
            ],

            [
                'title' => 'Адыгея',
                'post_lnk' => '/tour/adygea',
                'post_thumbinal' => "calendar/adigeya_2.jpg",
                'dey_count' => '3 дня / 2 ночи',
                'price' => 'от 23 000',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-06-11",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-12",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-14",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-06-15",
                        "position" => "1",
                    ]
                ]),
            ],

            [
                'title' => 'Альпаки + Океанариум. Воронеж',
                'post_lnk' => '/tour/alpaka-park',
                'post_thumbinal' => "calendar/alpaki.jpg",
                'dey_count' => null,
                'price' => '5000',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-01",
                        "position" => "1",
                    ],

                    [
                        "date" => "2025-06-12",
                        "position" => "6",
                    ]
                ]),
            ],

            [
                'title' => 'Волгоград',
                'post_lnk' => '/tour/volgograd',
                'post_thumbinal' => "calendar/volgograd.jpg",
                'dey_count' => null,
                'price' => '8500',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-11",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-06-12",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "2",
                    ]
                ]),
            ],

            [
                'title' => 'Беларусь + замки',
                'post_lnk' => '/tour/belarus-2025',
                'post_thumbinal' => "calendar/rb.jpg",
                'dey_count' => null,
                'price' => '8500',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-12",
                        "position" => "3",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "3",
                    ],
                    [
                        "date" => "2025-06-14",
                        "position" => "3",
                    ],
                    [
                        "date" => "2025-06-15",
                        "position" => "3",
                    ],

                    [
                        "date" => "2025-07-11",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-12",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-13",
                        "position" => "1",
                    ],

                    [
                        "date" => "2025-07-27",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-28",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-29",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-30",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-14",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-15",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-16",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-17",
                        "position" => "1",
                    ],
                ]),
            ],

            [
                'title' => 'Казань + Йошкар-Ола',
                'post_lnk' => '/tour/kazan',
                'post_thumbinal' => "calendar/kazan.jpg",
                'dey_count' => null,
                'price' => '28000',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-12",
                        "position" => "4",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "4",
                    ],
                    [
                        "date" => "2025-06-14",
                        "position" => "4",
                    ],
                    [
                        "date" => "2025-06-15",
                        "position" => "4",
                    ],

                    [
                        "date" => "2025-07-17",
                        "position" => "1",
                    ],

                    [
                        "date" => "2025-07-18",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-19",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-20",
                        "position" => "1",
                    ],

                    [
                        "date" => "2025-08-03",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-04",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-05",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-06",
                        "position" => "1",
                    ],
                ]),
            ],

            [
                'title' => 'Санкт-Петербург Белые ночи. Фонтаны',
                'post_lnk' => '/tour/sankt-peterburg',
                'post_thumbinal' => "calendar/spb.webp",
                'dey_count' => null,
                'price' => '28000',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-11",
                        "position" => "5",
                    ],
                    [
                        "date" => "2025-06-12",
                        "position" => "5",
                    ],
                    [
                        "date" => "2025-06-13",
                        "position" => "5",
                    ],
                    [
                        "date" => "2025-06-14",
                        "position" => "5",
                    ],
                    [
                        "date" => "2025-06-15",
                        "position" => "5",
                    ],

                    [
                        "date" => "2025-07-06",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-07",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-08",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-09",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-10",
                        "position" => "1",
                    ],

                    [
                        "date" => "2025-07-20",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-07-21",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-22",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-23",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-07-24",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-17",
                        "position" => "2",
                    ],
                    [
                        "date" => "2025-08-18",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-19",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-20",
                        "position" => "1",
                    ],
                    [
                        "date" => "2025-08-21",
                        "position" => "1",
                    ],
                ]),
            ],

            [
                'title' => 'ГастроТур Кофе. Хлеб. Вино',
                'post_lnk' => '/tour/gastro-tur',
                'post_thumbinal' => "calendar/bred.webp",
                'dey_count' => null,
                'price' => '5900',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-12",
                        "position" => "7",
                    ],
                ]),
            ],

            [
                'title' => 'Москва + Парк Патриот',
                'post_lnk' => '/tour/moskva',
                'post_thumbinal' => "calendar/mos.jpg",
                'dey_count' => null,
                'price' => '5000',
                'region' => null,
                'dates' => json_encode([

                    [
                        "date" => "2025-06-12",
                        "position" => "8",
                    ],
                ]),
            ],
        ];

        DB::table("calendars")->insert($data);
    }
}
