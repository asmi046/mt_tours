<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeaDestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $destinations = [
            [
                'title' => 'Краснодарский край',
                'slug' => 'krasnodarskiy-kray',
                'description' => null,
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Крым',
                'slug' => 'crimea',
                'description' => null,
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('sea_destinations')->insert($destinations);
    }
}
