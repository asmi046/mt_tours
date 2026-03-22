<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZagranGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ZagranDestinationSeeder::class,
            ZagranResortSeeder::class,
        ]);
    }
}
