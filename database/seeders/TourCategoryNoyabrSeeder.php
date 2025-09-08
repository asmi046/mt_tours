<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourCategoryNoyabrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('cat/may.svg', file_get_contents(public_path('tour_info/cat/may.svg')), 'public');


        $data = [
            [
                'icon' => 'cat/may.svg',
                'show' => false,
                'name' => "Туры на Ноябрьские Праздники",
                'html_name' => "Туры на Ноябрьские<br>Праздники 2025<br>с МирТуризма",

                'top_title' => 'Ноябрьские Праздники<br>Турв из Курска <strong class="gold">2025</strong>',
                'top_description' => 'Увлекательные туры на ноябрьские праздники. Путешествуй с МирТуризма и получай незабываемые впечатления.',

                'subtitle' => "Увлекательные семейные путешествия для всей семьи! Поймайте осенний вайп и путешествуй вместе с МирТуризма46! Мы подберем Вам тур на любой вкус и кошелек!",
                'slug' => Str::slug("Туры на Ноябрьские Праздники"),
                'template_name' => "categories.noyabr",
                'description' => "",
            ],

        ];

        DB::table("tour_categories")->insert($data);

        DB::table("seo_data")->insert(
            [
                'url' => 'tours/'.Str::slug("Туры на Ноябрьские Праздники"),
                'seo_title' => "Туры на Ноябрьские Праздники из Курска 2025",
                'seo_description' => "Туры на Ноябрьские Праздники из Курска 2025. Увлекательные туры на ноябрьские праздники. Путешествуй с МирТуризма и получай незабываемые впечатления.",
            ]
        );


    }
}
