<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BusCatalogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bus_catalogs')->truncate();

        Storage::disk('public')->put('buses/b1_1.jpg', file_get_contents(public_path('bus_base/b1/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b1_2.jpg', file_get_contents(public_path('bus_base/b1/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b1_3.jpg', file_get_contents(public_path('bus_base/b1/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b1_4.jpg', file_get_contents(public_path('bus_base/b1/4.jpg')), 'public');

        Storage::disk('public')->put('buses/b2_1.jpg', file_get_contents(public_path('bus_base/b2/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b2_2.jpg', file_get_contents(public_path('bus_base/b2/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b2_3.jpg', file_get_contents(public_path('bus_base/b2/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b2_4.jpg', file_get_contents(public_path('bus_base/b2/4.jpg')), 'public');

        Storage::disk('public')->put('buses/b3_1.jpg', file_get_contents(public_path('bus_base/b3/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_2.jpg', file_get_contents(public_path('bus_base/b3/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_3.jpg', file_get_contents(public_path('bus_base/b3/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_4.jpg', file_get_contents(public_path('bus_base/b3/4.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_5.jpg', file_get_contents(public_path('bus_base/b3/5.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_6.jpg', file_get_contents(public_path('bus_base/b3/6.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_7.jpg', file_get_contents(public_path('bus_base/b3/7.jpg')), 'public');
        Storage::disk('public')->put('buses/b3_8.jpg', file_get_contents(public_path('bus_base/b3/8.jpg')), 'public');

        Storage::disk('public')->put('buses/b4_1.jpg', file_get_contents(public_path('bus_base/b4/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b4_2.jpg', file_get_contents(public_path('bus_base/b4/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b4_3.jpg', file_get_contents(public_path('bus_base/b4/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b4_4.jpg', file_get_contents(public_path('bus_base/b4/4.jpg')), 'public');

        Storage::disk('public')->put('buses/b5_1.jpg', file_get_contents(public_path('bus_base/b5/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b5_2.jpg', file_get_contents(public_path('bus_base/b5/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b5_3.jpg', file_get_contents(public_path('bus_base/b5/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b5_4.jpg', file_get_contents(public_path('bus_base/b5/4.jpg')), 'public');

        Storage::disk('public')->put('buses/b6_1.jpg', file_get_contents(public_path('bus_base/b6/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b6_2.jpg', file_get_contents(public_path('bus_base/b6/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b6_3.jpg', file_get_contents(public_path('bus_base/b6/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b6_4.jpg', file_get_contents(public_path('bus_base/b6/4.jpg')), 'public');

        Storage::disk('public')->put('buses/b7_1.jpg', file_get_contents(public_path('bus_base/b7/1.jpg')), 'public');
        Storage::disk('public')->put('buses/b7_2.jpg', file_get_contents(public_path('bus_base/b7/2.jpg')), 'public');
        Storage::disk('public')->put('buses/b7_3.jpg', file_get_contents(public_path('bus_base/b7/3.jpg')), 'public');
        Storage::disk('public')->put('buses/b7_4.jpg', file_get_contents(public_path('bus_base/b7/4.jpg')), 'public');

        $now = now();

        DB::table('bus_catalogs')->insert([
            [
                'title' => 'Туристический автобус 53 места',
                'order' => 1,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b1_1.jpg', 'description' => ''],
                    ['file' => 'buses/b1_2.jpg', 'description' => ''],
                    ['file' => 'buses/b1_3.jpg', 'description' => ''],
                    ['file' => 'buses/b1_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Туристический автобус 53 места (белый)',
                'order' => 2,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b2_1.jpg', 'description' => ''],
                    ['file' => 'buses/b2_2.jpg', 'description' => ''],
                    ['file' => 'buses/b2_3.jpg', 'description' => ''],
                    ['file' => 'buses/b2_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Новый Mercedes-Benz Sprinter ЛЮКС 19 МЕСТ',
                'order' => 3,
                'description' => '<ul><li>Usb зарядки у каждого пассажира</li><li>Столики у каждого пассажира</li><li>кожаный салон</li><li>двойные стеклопакеты- пониженный уровень шума</li><li>TV</li><li>кондиционер</li><li>микрофон</li><li>автоматическая дверь</li><li>интерьерная подсветка</li><li>увеличенное багажное отделение</li></ul>',
                'gallery' => json_encode([
                    ['file' => 'buses/b3_1.jpg', 'description' => 'Современный немецкий автобус премиум уровня и топового оснащения'],
                    ['file' => 'buses/b3_2.jpg', 'description' => 'Заводская тонировка автобуса гарантирует комфорт в любую погоду'],
                    ['file' => 'buses/b3_3.jpg', 'description' => 'Система кондиционирования создаёт комфортную температуру круглый год'],
                    ['file' => 'buses/b3_4.jpg', 'description' => 'Увеличенное багажное отделение. Весь багаж поместится легко!'],
                    ['file' => 'buses/b3_5.jpg', 'description' => 'Кожаный салон светлых тонов и контурное освещение ambilight'],
                    ['file' => 'buses/b3_6.jpg', 'description' => 'Сиденья оснащены 3-х точечными ремнями безопасности'],
                    ['file' => 'buses/b3_7.jpg', 'description' => 'Сиденья наклоняются и раздвигаются в сторону для максимального комфорта'],
                    ['file' => 'buses/b3_8.jpg', 'description' => 'Сиденья оснащены USB-зарядками, столиками, индивидуальным освещением'],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Туристический автобус Neoplan 68 мест',
                'order' => 4,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b4_1.jpg', 'description' => ''],
                    ['file' => 'buses/b4_2.jpg', 'description' => ''],
                    ['file' => 'buses/b4_3.jpg', 'description' => ''],
                    ['file' => 'buses/b4_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Туристический автобус Mercedes-Benz 49 мест',
                'order' => 5,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b5_1.jpg', 'description' => ''],
                    ['file' => 'buses/b5_2.jpg', 'description' => ''],
                    ['file' => 'buses/b5_3.jpg', 'description' => ''],
                    ['file' => 'buses/b5_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Туристический автобус Mercedes-Benz 49 мест (синий)',
                'order' => 6,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b6_1.jpg', 'description' => ''],
                    ['file' => 'buses/b6_2.jpg', 'description' => ''],
                    ['file' => 'buses/b6_3.jpg', 'description' => ''],
                    ['file' => 'buses/b6_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Туристический автобус Mercedes-Benz 18 мест',
                'order' => 7,
                'description' => null,
                'gallery' => json_encode([
                    ['file' => 'buses/b7_1.jpg', 'description' => ''],
                    ['file' => 'buses/b7_2.jpg', 'description' => ''],
                    ['file' => 'buses/b7_3.jpg', 'description' => ''],
                    ['file' => 'buses/b7_4.jpg', 'description' => ''],
                ]),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
