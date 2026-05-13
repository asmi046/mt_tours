<?php

namespace Database\Seeders;

use App\Models\Slider;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sliders')->truncate();

        Storage::disk('public')->put('main_bn/spb.webp', file_get_contents(public_path('banner_info/spb.webp')), 'public');
        Storage::disk('public')->put('main_bn/adigeya.jpg', file_get_contents(public_path('banner_info/adigeya.jpg')), 'public');
        Storage::disk('public')->put('main_bn/alpaki.jpg', file_get_contents(public_path('banner_info/alpaki.jpg')), 'public');
        Storage::disk('public')->put('main_bn/asetri.webp', file_get_contents(public_path('banner_info/asetri.webp')), 'public');

        $items = [
            [
                'title' => 'Тур в Санкт-Петербург',
                'image' => 'main_bn/spb.webp',
                'link' => '/tour/sankt-peterburg',
                'order' => 10,
            ],
            [
                'title' => 'Весенняя адыгея',
                'image' => 'main_bn/adigeya.jpg',
                'link' => '/tour/adygea',
                'order' => 20,
            ],
            [
                'title' => 'Альпаки + Хаски + Океанариум',
                'image' => 'main_bn/alpaki.jpg',
                'link' => '/tour/alpaka-park',
                'order' => 30,
            ],
            [
                'title' => 'Осетровая ферма',
                'image' => 'main_bn/asetri.webp',
                'link' => '/tour/voronezh-osetrovaya-ferma',
                'order' => 40,
            ],
        ];

        foreach ($items as $item) {
            Slider::create($item);
        }
    }
}
