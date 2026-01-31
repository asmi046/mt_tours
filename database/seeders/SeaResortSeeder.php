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
                'page_title' => 'Автобусные туры в Анапу',
                'page_subtitle' => 'Лучшие предложения на отдых в Анапе, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Кабардинку',
                'page_subtitle' => 'Лучшие предложения на отдых в Кабардинке, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Геленджик',
                'page_subtitle' => 'Лучшие предложения на отдых в Геленджике, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'gelendzik',
                'sort_order' => 3,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Лермонтово',
                'page_title' => 'Автобусные туры в Лермонтово',
                'page_subtitle' => 'Лучшие предложения на отдых в Лермонтово, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Новомихайловский',
                'page_subtitle' => 'Лучшие предложения на отдых в Новомихайловском, автобусные туры прямо из Курска',
                'subtitle' => 'Туапсинский р-н.',
                'slug' => 'novomixailovskii',
                'sort_order' => 5,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Дедеркой',
                'page_title' => 'Автобусные туры в Дедеркой',
                'page_subtitle' => 'Лучшие предложения на отдых в Дедеркое, автобусные туры прямо из Курска',
                'subtitle' => 'Туапсинский р-н.',
                'slug' => 'dederkoi',
                'sort_order' => 6,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Лазаревское',
                'page_title' => 'Автобусные туры в Лазаревское',
                'page_subtitle' => 'Лучшие предложения на отдых в Лазаревском, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'lazarevskoe',
                'sort_order' => 7,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $krasnodarId,
                'title' => 'Адлер',
                'page_title' => 'Автобусные туры в Адлер',
                'page_subtitle' => 'Лучшие предложения на отдых в Адлере, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Приморский',
                'page_subtitle' => 'Лучшие предложения на отдых в Приморском, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Береговое',
                'page_subtitle' => 'Лучшие предложения на отдых в Береговом, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Феодосию',
                'page_subtitle' => 'Лучшие предложения на отдых в Феодосии, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Коктебель',
                'page_subtitle' => 'Лучшие предложения на отдых в Коктебеле, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Курортное',
                'page_subtitle' => 'Лучшие предложения на отдых в Курортном, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Судак',
                'page_subtitle' => 'Лучшие предложения на отдых в Судаке, автобусные туры прямо из Курска',
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
                'page_title' => 'Автобусные туры в Морское',
                'page_subtitle' => 'Лучшие предложения на отдых в Морском, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'morskoye',
                'sort_order' => 7,
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('sea_resorts')->insert($resorts);

        foreach ($resorts as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'turi-na-more/'.$item['slug']],
                [
                    'url' => 'turi-na-more/'.$item['slug'],
                    'seo_title' => $item['page_title'],
                    'seo_description' => $item['page_subtitle'],
                ]
            );
        }
    }
}
