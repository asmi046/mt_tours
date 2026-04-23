<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PageBiletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            'title' => 'Купить билет на море из Курска',
            'slug' => 'kupit-bilet-na-more-iz-kurska',
            'description' => file_get_contents(public_path('page_text/bilet.html')),
        ];

        DB::table('pages')->updateOrInsert(
            ['slug' => $item['slug']],
            [
                'title' => $item['title'],
                'description' => $item['description'],
            ]
        );
    }
}
