<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Экскурсионные туры и поездки по России из Курска",
                'seo_description' => "Экскурсионные туры и поездки по Росиии с выездом из Курска, у нас есть туры на любой вкус и кошелек. ",
                'page_title' => "Экскурсионные туры<br>по России 2025 <br>с МирТуризма46",
                'page_sub_title' => "Каледоскоп эмоций и впечатлений Гарантируем! Спешите к нам, мы подберем тур на любой вкус и кошелек!",
            ]
        ];

        DB::table("seo_data")->insert($data);
    }
}
