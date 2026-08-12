<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZagranGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('zagran_resorts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call([
            ZagranDestinationSeeder::class,
            ZagranHotToursSeoSeeder::class,
            ZagranResortSeederTurkey::class,
            ZagranResortSeederSriLanka::class,
            ZagranResortSeederEgypt::class,
            ZagranResortSeederTunisia::class,
            ZagranResortSeederVietnam::class,
            ZagranResortSeederChina::class,
            ZagranResortSeederThailand::class,
            ZagranResortSeederUae::class,
            ZagranResortSeederMexico::class,
            ZagranResortSeederAbkhazia::class,
        ]);
    }
}
