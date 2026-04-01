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
                'alean_id' => 18,
                'alean_areas_id' => '18, 1110, 1481, 1638, 1026, 212, 1184',
                'alean_price_up' => 3500,
                'alean_cid' => 'anapa',
                'sort_order' => 1,
                'description' => null,
                'bus_schedule' => 'Курск - Анапа',
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
                'alean_id' => 1238,
                'alean_areas_id' => '1238',
                'alean_cid' => 'kabardinka',
                'alean_price_up' => 3500,
                'sort_order' => 2,
                'description' => null,
                'bus_schedule' => 'Курск - Анапа',
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
                'alean_id' => 4,
                'alean_areas_id' => '4, 1139, 1660, 1139, 1144, 1658, 1134, 1190, 1313',
                'alean_cid' => 'gelendzhik',
                'alean_price_up' => 3500,
                'sort_order' => 3,
                'description' => null,
                'bus_schedule' => 'Курск - Анапа',
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
                'alean_id' => 1345,
                'alean_areas_id' => '1345',
                'alean_cid' => 'lermontovo',
                'alean_price_up' => 3500,
                'sort_order' => 4,
                'description' => null,
                'bus_schedule' => 'Курск - Лазаревское',
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
                'alean_id' => 1418,
                'alean_areas_id' => '1418',
                'alean_cid' => 'novomihailovskii',
                'alean_price_up' => 3500,
                'sort_order' => 5,
                'description' => null,
                'bus_schedule' => 'Курск - Лазаревское',
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
                'alean_id' => 1179,
                'alean_areas_id' => '1179',
                'alean_cid' => 'dederkoi',
                'alean_price_up' => 3500,
                'sort_order' => 6,
                'description' => null,
                'bus_schedule' => 'Курск - Лазаревское',
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
                'alean_id' => 577,
                'alean_areas_id' => '577',
                'alean_cid' => 'lazarevskoe',
                'alean_price_up' => 3500,
                'sort_order' => 7,
                'description' => null,
                'bus_schedule' => 'Курск - Лазаревское',
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // $resorts[] = [
            //     'sea_destination_id' => $krasnodarId,
            //     'title' => 'Адлер',
            //     'page_title' => 'Автобусные туры в Адлер',
            //     'page_subtitle' => 'Лучшие предложения на отдых в Адлере, автобусные туры прямо из Курска',
            //     'subtitle' => null,
            //     'slug' => 'adler',
            //     'alean_id' => 576,
            //     'alean_areas_id' => '576',
            //     'alean_cid' => 'adler',
            //     'alean_price_up' => 3500,
            //     'sort_order' => 8,
            //     'description' => null,
            //     'bus_schedule' => 'Курск - Лазаревское',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ];
        }

        // Крым
        if ($crimeaId) {
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Приморский',
                'page_title' => 'Автобусные туры в Приморский',
                'page_subtitle' => 'Лучшие предложения на отдых в Приморском, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'primorskii',
                'alean_id' => null,
                'alean_areas_id' => null,
                'alean_cid' => null,
                'alean_price_up' => 3500,
                'sort_order' => 1,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Береговое',
                'page_title' => 'Автобусные туры в Береговое',
                'page_subtitle' => 'Лучшие предложения на отдых в Береговом, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'beregovoe',
                'alean_id' => 638,
                'alean_areas_id' => '638',
                'alean_cid' => 'beregovoe',
                'alean_price_up' => 3500,
                'sort_order' => 2,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Феодосия',
                'page_title' => 'Автобусные туры в Феодосию',
                'page_subtitle' => 'Лучшие предложения на отдых в Феодосии, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'feodosiia',
                'alean_id' => 1,
                'alean_areas_id' => '1, 1692',
                'alean_cid' => 'feodosiya',
                'alean_price_up' => 3500,
                'sort_order' => 3,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
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
                'alean_id' => 1291,
                'alean_areas_id' => '1291',
                'alean_cid' => "koktebel'",
                'alean_price_up' => 3500,
                'sort_order' => 4,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $resorts[] = [
                'sea_destination_id' => $crimeaId,
                'title' => 'Курортное',
                'page_title' => 'Автобусные туры в Курортное',
                'page_subtitle' => 'Лучшие предложения на отдых в Курортном, автобусные туры прямо из Курска',
                'subtitle' => null,
                'slug' => 'kurortnoe',
                'alean_id' => 618,
                'alean_areas_id' => '618',
                'alean_cid' => 'kurortnoe',
                'alean_price_up' => 3500,
                'sort_order' => 5,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
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
                'alean_id' => 3,
                'alean_areas_id' => '3, 640, 1635',
                'alean_cid' => 'sudak',
                'alean_price_up' => 3500,
                'sort_order' => 6,
                'description' => null,
                'bus_schedule' => 'Курск - Крым',
                'created_at' => now(),
                'updated_at' => now(),
            ];
            // $resorts[] = [
            //     'sea_destination_id' => $crimeaId,
            //     'title' => 'Морское',
            //     'page_title' => 'Автобусные туры в Морское',
            //     'page_subtitle' => 'Лучшие предложения на отдых в Морском, автобусные туры прямо из Курска',
            //     'subtitle' => null,
            //     'slug' => 'morskoe',
            //     'alean_id' => 639,
            //     'alean_areas_id' => '639',
            //     'alean_cid' => 'morskoe',
            //     'alean_price_up' => 3500,
            //     'sort_order' => 7,
            //     'description' => null,
            //     'bus_schedule' => 'Курск - Крым',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ];
        }

        DB::table('sea_resorts')->insert($resorts);

        foreach ($resorts as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'tury-na-more/'.$item['slug']],
                [
                    'url' => 'tury-na-more/'.$item['slug'],
                    'seo_title' => $item['page_title'],
                    'seo_description' => $item['page_subtitle'],
                ]
            );
        }
    }
}
