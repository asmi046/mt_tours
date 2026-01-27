<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeaResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sea_resorts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $krasnodarId = DB::table('sea_destinations')->where('slug', 'krasnodarskiy-kray')->value('id');
        $crimeaId = DB::table('sea_destinations')->where('slug', 'crimea')->value('id');

        $resorts = [];

        // Краснодарский край
        if ($krasnodarId) {
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Анапа',
                'subtitle' => null,
                'slug' => 'anapa',
                'sort_order' => 1,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Кабардинка',
                'subtitle' => null,
                'slug' => 'kabardinka',
                'sort_order' => 2,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Геленджик',
                'subtitle' => null,
                'slug' => 'gelendzhik',
                'sort_order' => 3,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Лермонтово',
                'subtitle' => 'Туапсинский р-н.',
                'slug' => 'lermontovo',
                'sort_order' => 4,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Новомихайловский',
                'subtitle' => 'Туапсинский р-н.',
                'slug' => 'novomikhaylovskiy',
                'sort_order' => 5,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Дедеркой',
                'subtitle' => 'Туапсинский р-н.',
                'slug' => 'dederkoy',
                'sort_order' => 6,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Лазаревское',
                'subtitle' => null,
                'slug' => 'lazarevskoye',
                'sort_order' => 7,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Адлер',
                'subtitle' => null,
                'slug' => 'adler',
                'sort_order' => 8,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Крым
        if ($crimeaId) {
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Приморский',
                'subtitle' => null,
                'slug' => 'primorskiy',
                'sort_order' => 1,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Береговое',
                'subtitle' => null,
                'slug' => 'beregovoye',
                'sort_order' => 2,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Феодосия',
                'subtitle' => null,
                'slug' => 'feodosia',
                'sort_order' => 3,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Коктебель',
                'subtitle' => null,
                'slug' => 'koktebel',
                'sort_order' => 4,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Курортное',
                'subtitle' => null,
                'slug' => 'kurortnoye',
                'sort_order' => 5,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Судак',
                'subtitle' => null,
                'slug' => 'sudak',
                'sort_order' => 6,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Морское',
                'subtitle' => null,
                'slug' => 'morskoye',
                'sort_order' => 7,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('sea_resorts')->insert($resorts);
    }
}
