<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeaBusScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sea_bus_schedules')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $busSchedules = [];

        // Курск - Крым
        // $busSchedules[] = [
        //     'direction' => 'Курск - Крым',
        //     'start_date' => '14 июня',
        //     'end_date' => '25 июня',
        //     'sort_order' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '23 июня',
            'end_date' => '04 июля',
            'up_price' => 0,
            'sort_order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '02 июля',
            'end_date' => '13 июля',
            'up_price' => 500,
            'sort_order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '11 июля',
            'end_date' => '22 июля',
            'up_price' => 500,
            'sort_order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '20 июля',
            'end_date' => '31 июля',
            'up_price' => 500,
            'sort_order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '29 июля',
            'end_date' => '09 августа',
            'up_price' => 500,
            'sort_order' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '07 августа',
            'end_date' => '18 августа',
            'up_price' => 500,
            'sort_order' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '16 августа',
            'end_date' => '27 августа',
            'up_price' => 500,
            'sort_order' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '25 августа',
            'end_date' => '05 сентября',
            'up_price' => 0,
            'sort_order' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '03 сентября',
            'end_date' => '14 сентября',
            'up_price' => 0,
            'sort_order' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Крым',
            'start_date' => '12 сентября',
            'end_date' => '23 сентября',
            'up_price' => 0,
            'sort_order' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Курск - Анапа
        // $busSchedules[] = [
        //     'direction' => 'Курск - Анапа',
        //     'start_date' => '08 июня',
        //     'end_date' => '19 июня',
        //     'sort_order' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        // $busSchedules[] = [
        //     'direction' => 'Курск - Анапа',
        //     'start_date' => '17 июня',
        //     'end_date' => '28 июня',
        //     'sort_order' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '26 июня',
            'end_date' => '07 июля',
            'up_price' => 0,
            'sort_order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '05 июля',
            'end_date' => '16 июля',
            'up_price' => 0,
            'sort_order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '14 июля',
            'end_date' => '25 июля',
            'up_price' => 500,
            'sort_order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '23 июля',
            'end_date' => '03 августа',
            'up_price' => 500,
            'sort_order' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '01 августа',
            'end_date' => '12 августа',
            'up_price' => 500,
            'sort_order' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '10 августа',
            'end_date' => '21 августа',
            'up_price' => 500,
            'sort_order' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '19 августа',
            'end_date' => '30 августа',
            'up_price' => 500,
            'sort_order' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '28 августа',
            'end_date' => '08 сентября',
            'up_price' => 0,
            'sort_order' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '06 сентября',
            'end_date' => '17 сентября',
            'up_price' => 0,
            'sort_order' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Анапа',
            'start_date' => '15 сентября',
            'end_date' => '26 сентября',
            'up_price' => 0,
            'sort_order' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Курск - Лазаревское
        // $busSchedules[] = [
        //     'direction' => 'Курск - Лазаревское',
        //     'start_date' => '11 июня',
        //     'end_date' => '22 июня',
        //     'sort_order' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '20 июня',
            'end_date' => '1 июля',
            'up_price' => 0,
            'sort_order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '29 июня',
            'end_date' => '10 июля',
            'up_price' => 0,
            'sort_order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '8 июля',
            'end_date' => '19 июля',
            'up_price' => 500,
            'sort_order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '17 июля',
            'end_date' => '28 июля',
            'up_price' => 500,
            'sort_order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '26 июля',
            'end_date' => '6 августа',
            'up_price' => 500,
            'sort_order' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '4 августа',
            'end_date' => '15 августа',
            'up_price' => 500,
            'sort_order' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '13 августа',
            'end_date' => '24 августа',
            'up_price' => 500,
            'sort_order' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '22 августа',
            'end_date' => '2 сентября',
            'up_price' => 0,
            'sort_order' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '31 августа',
            'end_date' => '11 сентября',
            'up_price' => 0,
            'sort_order' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $busSchedules[] = [
            'direction' => 'Курск - Лазаревское',
            'start_date' => '9 сентября',
            'end_date' => '',
            'up_price' => 0,
            'sort_order' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('sea_bus_schedules')->insert($busSchedules);
    }
}
