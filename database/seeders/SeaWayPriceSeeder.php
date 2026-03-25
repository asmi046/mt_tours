<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeaWayPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sea_way_prices')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $items = [
            // [
            //     'city' => 'Темрюк',
            //     'order' => 2,
            //     'bus_schedule' => 'Курск - Крым',
            //     'one_way' => 5000,
            //     'two_way' => 7500,
            // ],
            // [
            //     'city' => 'Голубицкая',
            //     'order' => 3,
            //     'bus_schedule' => 'Курск - Крым',
            //     'one_way' => 5000,
            //     'two_way' => 7500,
            // ],
            [
                'city' => 'Витязево',
                'order' => 4,
                'bus_schedule' => 'Курск - Анапа',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Анапа',
                'order' => 5,
                'bus_schedule' => 'Курск - Анапа',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Новороссийск',
                'order' => 6,
                'bus_schedule' => 'Курск - Анапа',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Кабардинка',
                'order' => 7,
                'bus_schedule' => 'Курск - Анапа',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Геленджик',
                'order' => 8,
                'bus_schedule' => 'Курск - Анапа',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Джубга',
                'order' => 9,
                'bus_schedule' => 'Курск - Лазаревское',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Лермонтово',
                'order' => 10,
                'bus_schedule' => 'Курск - Лазаревское',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Новомихайловский',
                'order' => 11,
                'bus_schedule' => 'Курск - Лазаревское',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Туапсе',
                'order' => 12,
                'bus_schedule' => 'Курск - Лазаревское',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Лазаревское',
                'order' => 13,
                'bus_schedule' => 'Курск - Лазаревское',
                'one_way' => 5500,
                'two_way' => 8500,
            ],
            [
                'city' => 'Керчь',
                'order' => 14,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => 5000,
                'two_way' => 7500,
            ],
            [
                'city' => 'Приморский',
                'order' => 15,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Феодосия',
                'order' => 16,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Коктебель',
                'order' => 17,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => 5000,
                'two_way' => 8000,
            ],
            [
                'city' => 'Судак',
                'order' => 18,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => 5500,
                'two_way' => 8500,
            ],
            [
                'city' => 'Симферополь',
                'order' => 19,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => null,
                'two_way' => 12000,
            ],
            [
                'city' => 'Алушта',
                'order' => 20,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => null,
                'two_way' => 13000,
            ],
            [
                'city' => 'Гурзуф',
                'order' => 21,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => null,
                'two_way' => 13000,
            ],
            [
                'city' => 'Ялта',
                'order' => 22,
                'bus_schedule' => 'Курск - Крым',
                'one_way' => null,
                'two_way' => 13000,
            ],
        ];

        $now = now();
        foreach ($items as &$item) {
            $item['created_at'] = $now;
            $item['updated_at'] = $now;
        }
        unset($item);

        DB::table('sea_way_prices')->insert($items);
    }
}
