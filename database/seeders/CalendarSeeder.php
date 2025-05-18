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
        Storage::disk('public')->put("calendar/adigeya.jpg", file_get_contents(public_path('tour_info/calendar_img/adigeya.jpg')), 'public');
        Storage::disk('public')->put("calendar/kudikina.jpg", file_get_contents(public_path('tour_info/calendar_img/kudikina.jpg')), 'public');
        Storage::disk('public')->put("calendar/tula.jpg", file_get_contents(public_path('tour_info/calendar_img/tula.jpg')), 'public');
        Storage::disk('public')->put("calendar/matrona.webp", file_get_contents(public_path('tour_info/calendar_img/matrona.webp')), 'public');

        $data = [
            [
                'title' => 'Кудыкина гора',
                'post_lnk' => '/tour/tur-kudykina-gora-iz-kuoska-na-maiskie',
                'post_thumbinal' => "calendar/kudikina.jpg",
                'dey_count' => null,
                'price' => '2500',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-31",
                        "position" => "0",
                    ]
                ]),
            ],

            [
                'title' => 'Матрона + Всецарица',
                'post_lnk' => '#',
                'post_thumbinal' => "calendar/matrona.webp",
                'dey_count' => null,
                'price' => '3500',
                'region' => null,
                'dates' => json_encode([
                    [
                        "date" => "2025-05-18",
                        "position" => "0",
                    ]
                ]),
            ],

            [
                'title' => 'Тула',
                'post_lnk' => '#',
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
                'post_lnk' => '#',
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
                'post_lnk' => '#',
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
        ];

        DB::table("calendars")->insert($data);
    }
}
