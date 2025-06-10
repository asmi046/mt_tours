<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeaDirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sea_directions")->insert(
            [
                [
                    'name' => 'Крым',
                    'slug' => 'crimea',
                ],
                [
                    'name' => 'Краснодарский край',
                    'slug' => 'krasnodarskiy_kray',
                ],
            ]
        );

    }
}
