<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $data = [
            [
                'name' => "Туры на Новогодние Праздники",
                'html_name' => "Новогодние<br>путешествия 2025<br>с МирТуризма",
                'subtitle' => "Коледоскоп эмоций и впечатлений этой зимы. Спешите к нам, мы подберем Новогодний тур на любой вкус и кошелек!",
                'slug' => Str::slug("Туры на Новогодние Праздники"),
                'template_name' => "tours.new_year",
                'description' => file_get_contents(public_path('tmp_data/tour_category_info/new_year.html')),
            ],

            [
                'name' => "Туры на Майские Праздники из Курска",
                'html_name' => "Туры на<br>Майские Праздники<br>из Курска",
                'subtitle' => "Увлекательные семейные путешествия для всей семьи! Поймайте весенний вайп и путешествуй вместе с МирТуризма46! Мы подберем Вам тур на любой вкус и кошелек!",
                'slug' => Str::slug("Май"),
                'template_name' => "tours.may_category",
                'description' => file_get_contents(public_path('tmp_data/tour_category_info/may.html')),
            ],

            [
                'name' => "Туры на день России из Курска",
                'html_name' => "Туры на<br>день России<br>из Курска",
                'subtitle' => "Увлекательные семейные путешествия для всей семьи! Поймайте летний вайп и путешествуй вместе с МирТуризма46! Мы подберем Вам тур на любой вкус и кошелек!",
                'slug' => Str::slug("день России"),
                'template_name' => "tours.jun12_category",
                'description' => file_get_contents(public_path('tmp_data/tour_category_info/may.html')),
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
                'seo_title' => "Туры на Майские Праздники из Курска",
                'seo_description' => "Туры на Майские Праздники из Курска, отличные туры для Всей семьи, лови первые весенние впечатления",
            ]
        );

        DB::table("seo_data")->insert(
            [
                'url' => 'tours/'.Str::slug("день России"),
                'seo_title' => "Туры на день России из Курска",
                'seo_description' => "Туры на день России из Курска, отличные туры для Всей семьи, лови первые весенние впечатления",
            ]
        );
    }
}
