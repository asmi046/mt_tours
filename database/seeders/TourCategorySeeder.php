<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('cat/may.svg', file_get_contents(public_path('tour_info/cat/may.svg')), 'public');
        Storage::disk('public')->put('cat/gerb_rf.svg', file_get_contents(public_path('tour_info/cat/gerb_rf.svg')), 'public');


        $data = [
            [
                'icon' => 'cat/may.svg',
                'show' => false,
                'name' => "Туры на Новогодние Праздники",
                'html_name' => "Новогодние<br>путешествия 2025<br>с МирТуризма",

                'top_title' => 'Новогодние туры<br>из Курска <strong class="gold">2025</strong>',
                'top_description' => 'Встречай зиму с ураганом эмоций и впечатлений вместе с турами от МирТуризма. У нас Вы найдете путешествия на любой вкус и кошелек.',

                'subtitle' => "Коледоскоп эмоций и впечатлений этой зимы. Спешите к нам, мы подберем Новогодний тур на любой вкус и кошелек!",
                'slug' => Str::slug("Туры на Новогодние Праздники"),
                'template_name' => "categories.new_year",
                'description' => "",
            ],

            [
                'icon' => 'cat/may.svg',
                'show' => true,
                'name' => "Туры на Майские Праздники",
                'html_name' => "Туры на<br>Майские Праздники<br>из Курска",

                'top_title' => 'Майские туры<br>из Курска <strong class="gold">2025</strong>',
                'top_description' => 'Встречай весну с урагана эмоций и впечатлений вместе с турами от МирТуризма. У нас Вы найдете путешествия на любой вкус и кошелек.',

                'subtitle' => "Увлекательные семейные путешествия для всей семьи! Поймайте весенний вайп и путешествуй вместе с МирТуризма46! Мы подберем Вам тур на любой вкус и кошелек!",
                'slug' => Str::slug("Май"),
                'template_name' => "categories.may_category",
                'description' => "",
            ],

            [
                'icon' => 'cat/gerb_rf.svg',
                'show' => true,
                'name' => "Туры на день России",
                'html_name' => "Туры на<br>день России<br>из Курска",

                'top_title' => 'Туры на день России<br>из Курска <strong class="gold">2025</strong>',
                'top_description' => 'Встречай лето с ураганом эмоций и впечатлений вместе с турами от МирТуризма. У нас Вы найдете путешествия на любой вкус и кошелек.',

                'subtitle' => "Увлекательные семейные путешествия для всей семьи! Поймайте летний вайп и путешествуй вместе с МирТуризма46! Мы подберем Вам тур на любой вкус и кошелек!",
                'slug' => Str::slug("день России"),
                'template_name' => "categories.jun12_category",
                'description' => "",
            ],

        ];

        DB::table("tour_categories")->insert($data);

        DB::table("seo_data")->insert(
            [
                'url' => 'tours/'.Str::slug("Туры на Новогодние Праздники"),
                'seo_title' => "Туры на Новогодние Праздники",
                'seo_description' => "Туры на Новогодние Праздники из Курска, отличные туры для Всей семьи",
            ]
        );

        DB::table("seo_data")->insert(
            [
                'url' => 'tours/'.Str::slug("Май"),
                'page_title' => "Туры на<br>Майские праздники 2025<br>с МирТуризма46",
                'page_sub_title' => "Калейдоскоп эмоций и впечатлений этой весны. Спешите к нам, мы подберем Майский тур на любой вкус и кошелек!",
                'seo_title' => "Туры на Майские Праздники из Курска",
                'seo_description' => "Туры на Майские Праздники из Курска, отличные туры для Всей семьи, лови первые весенние впечатления",
            ]
        );

        DB::table("seo_data")->insert(
            [
                'url' => 'tours/'.Str::slug("день России"),
                'page_title' => "Туры на день России из Курска",
                'page_sub_title' => "Автобусные туры на день России из Курска! Подари себе и близким летнее настроение!",
                'seo_title' => "Туры на день России из Курска",
                'seo_description' => "Туры на день России из Курска, отличные туры для Всей семьи, лови первые весенние впечатления",
            ]
        );
    }
}
