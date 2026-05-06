<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PageSanatoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            'title' => 'Купить путевку в санаторий',
            'slug' => 'kupit-putevku-v-sanatoriy',
            'description' => file_get_contents(public_path('page_text/sanatori.html')),
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
