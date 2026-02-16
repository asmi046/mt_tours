<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeaGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SeaDestinationSeeder::class,
            SeaResortSeeder::class,
            SeaHotelSeeder::class,
            SeaBusScheduleSeeder::class,
            SeaPriceSeeder::class,
            SeaWayPriceSeeder::class,
        ]);
    }
}
