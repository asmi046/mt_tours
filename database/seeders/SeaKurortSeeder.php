<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeaKurortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [ //1
                'sea_direction_id' => 1,
                'name' => 'Приморский',
                'slug' => 'primorskiy',
            ],
            [ //2
                'sea_direction_id' => 1,
                'name' => 'Береговое',
                'slug' => 'beregovoe',
            ],
            [ //3
                'sea_direction_id' => 1,
                'name' => 'Феодосия',
                'slug' => 'feodosiya',
            ],
            [ //4
                'sea_direction_id' => 1,
                'name' => 'Коктебель',
                'slug' => 'koktebel',
            ],
            [ //5
                'sea_direction_id' => 1,
                'name' => 'Судак',
                'slug' => 'sudak',
            ],
            [ //6
                'sea_direction_id' => 1,
                'name' => 'Морское',
                'slug' => 'morskoe',
            ],

            // ---------------------------------

            [ //7
                'sea_direction_id' => 2,
                'name' => 'Анапа',
                'slug' => 'anapa',
            ],
            [ //8
                'sea_direction_id' => 2,
                'name' => 'Кабардинка',
                'slug' => 'kabardinka',
            ],
            [ //9
                'sea_direction_id' => 2,
                'name' => 'Геленджик',
                'slug' => 'gelendzhik',
            ],
            [ //10
                'sea_direction_id' => 2,
                'name' => 'Лермонтово',
                'slug' => 'lermontovo',
                'region' => 'Туапсинский р-н.',
            ],
            [ //11
                'sea_direction_id' => 2,
                'name' => 'Новомихайловский',
                'slug' => 'novomihaylovskiy',
                'region' => 'Туапсинский р-н.',
            ],
            [ //12
                'sea_direction_id' => 2,
                'name' => 'Дедеркой',
                'slug' => 'dederkoy',
                'region' => 'Туапсинский р-н.',
            ],
            [ //13
                'sea_direction_id' => 2,
                'name' => 'Лазаревское',
                'slug' => 'lazarevskoe',
            ],
            [ //14
                'sea_direction_id' => 2,
                'name' => 'Адлер',
                'slug' => 'adler',
            ],
        ];

        foreach ($data as $item) {
            DB::table("sea_kurorts")->insert($item);
        }

    }
}
