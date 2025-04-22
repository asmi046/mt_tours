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
                'seo_title' => "Туры на Майские праздники с выездом из Курска",
                'seo_description' => "Туры на Майские праздники с выездом из Курска, море эмоций и впечетлений весны 2025!",
                'page_title' => "Туры на<br>Майские праздники 2025 <br>с МирТуризма46",
                'page_sub_title' => "Каледоскоп эмоций и впечатлений этой весны. Спешите к нам, мы подберем Майский тур на любой вкус и кошелек!",
            ]
        ];

        DB::table("seo_data")->insert($data);
    }
}
