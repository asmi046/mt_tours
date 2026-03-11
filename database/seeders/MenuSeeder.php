<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->truncate();

        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => '🌸 Туры на Майские праздники',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tours/mai',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => '<span class="emoji">🌴</span> АВТОБУСЕ ТУРЫ НА МОРЕ 2026',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tury-na-more',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Купить проезд',
                'order' => 1,
                'parent' => 2,
                'lnk' => '/tury-na-more/kupit-proezd',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Школьные туры',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/school-tours',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Новости',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/news',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 1,
                'parent' => 0,
                'lnk' => '#contacts',
            ],
        ];

        DB::table('menus')->insert($data);

        $data_mob = [
            [
                'menu_name' => 'Боковое меню',
                'title' => '🌸 Туры на Майские праздники',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tours/mai',
            ],
            [
                'menu_name' => 'Боковое меню',
                'title' => '<span class="emoji">🌴</span> АВТОБУСЕ ТУРЫ НА МОРЕ 2026',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tury-na-more',
            ],
            [
                'menu_name' => 'Боковое меню',
                'title' => 'Купить проезд',
                'order' => 1,
                'parent' => 8,
                'lnk' => '/tury-na-more/kupit-proezd',
            ],
            [
                'menu_name' => 'Боковое меню',
                'title' => 'Школьные туры',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/school-tours',
            ],
            [
                'menu_name' => 'Боковое меню',
                'title' => 'Новости',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/news',
            ],
            [
                'menu_name' => 'Боковое меню',
                'title' => 'Контакты',
                'order' => 1,
                'parent' => 0,
                'lnk' => '#contacts',
            ],
        ];

        DB::table('menus')->insert($data_mob);

        $data_footer = [
            [
                'menu_name' => 'Меню в подвале',
                'title' => '🌸 Туры на Майские праздники',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tours/mai',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => '<span class="emoji">🌴</span> АВТОБУСЕ ТУРЫ НА МОРЕ 2026',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/tury-na-more',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Школьные туры',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/school-tours',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Новости',
                'order' => 1,
                'parent' => 0,
                'lnk' => '/news',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Контакты',
                'order' => 1,
                'parent' => 0,
                'lnk' => '#contacts',
            ],
        ];

        DB::table('menus')->insert($data_footer);
    }
}
