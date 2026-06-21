<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeederGrafik extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'title' => 'РАСПИСАНИЕ ДВИЖЕНИЯ АВТОБУСА',
                'slug' => Str::slug('grafik'),
                'description' => file_get_contents(public_path('page_text/grafik.html')),
            ],
        ];

        foreach ($data as $item) {
            $pageId = DB::table('pages')->insertGetId($item);

            DB::table('seo_data')->updateOrInsert(
                ['url' => 'page/'.$item['slug']],
                [
                    'url' => 'page/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
        }

    }
}
