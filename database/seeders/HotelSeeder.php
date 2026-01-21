<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Resort;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $antalya = Resort::where('slug', 'antalya')->first();
        $alanya = Resort::where('slug', 'alanya')->first();
        $sharm = Resort::where('slug', 'sharm-el-sheikh')->first();
        $hurghada = Resort::where('slug', 'hurghada')->first();
        $crete = Resort::where('slug', 'crete')->first();

        if ($antalya) {
            Hotel::create([
                'destination_id' => $antalya->destination_id,
                'resort_id' => $antalya->id,
                'title' => 'Royal Palace Resort',
                'slug' => 'royal-palace-resort',
                'sort_order' => 1,
                'description' => 'Роскошный пятизвездочный отель с собственным пляжем',
                'short_description' => 'Отель премиум класса',
                'gallery' => ['image1.jpg', 'image2.jpg', 'image3.jpg'],
                'parameters' => [
                    'звезды' => 5,
                    'питание' => 'All Inclusive',
                    'бассейны' => 3,
                    'до_моря' => '50 метров',
                ],
            ]);
        }

        if ($alanya) {
            Hotel::create([
                'destination_id' => $alanya->destination_id,
                'resort_id' => $alanya->id,
                'title' => 'Alanya Beach Hotel',
                'slug' => 'alanya-beach-hotel',
                'sort_order' => 1,
                'description' => 'Комфортабельный отель на первой линии',
                'short_description' => 'Отель на берегу моря',
                'gallery' => ['hotel1.jpg', 'hotel2.jpg'],
                'parameters' => [
                    'звезды' => 4,
                    'питание' => 'Ultra All Inclusive',
                    'бассейны' => 2,
                ],
            ]);
        }

        if ($sharm) {
            Hotel::create([
                'destination_id' => $sharm->destination_id,
                'resort_id' => $sharm->id,
                'title' => 'Sharm Grand Resort',
                'slug' => 'sharm-grand-resort',
                'sort_order' => 1,
                'description' => 'Современный отель с коралловым рифом',
                'short_description' => 'Отель для дайвинга',
                'gallery' => ['sharm1.jpg', 'sharm2.jpg', 'sharm3.jpg'],
                'parameters' => [
                    'звезды' => 5,
                    'питание' => 'All Inclusive',
                    'дайвинг_центр' => true,
                ],
            ]);
        }

        if ($hurghada) {
            Hotel::create([
                'destination_id' => $hurghada->destination_id,
                'resort_id' => $hurghada->id,
                'title' => 'Hurghada Paradise',
                'slug' => 'hurghada-paradise',
                'sort_order' => 1,
                'description' => 'Уютный отель для семейного отдыха',
                'short_description' => 'Семейный отель',
                'gallery' => null,
                'parameters' => [
                    'звезды' => 4,
                    'питание' => 'All Inclusive',
                    'детский_клуб' => true,
                ],
            ]);
        }

        if ($crete) {
            Hotel::create([
                'destination_id' => $crete->destination_id,
                'resort_id' => $crete->id,
                'title' => 'Crete Luxury Villa',
                'slug' => 'crete-luxury-villa',
                'sort_order' => 1,
                'description' => 'Эксклюзивная вилла на берегу моря',
                'short_description' => 'Вилла премиум класса',
                'gallery' => ['crete1.jpg', 'crete2.jpg'],
                'parameters' => [
                    'тип' => 'вилла',
                    'питание' => 'BB',
                    'приватный_пляж' => true,
                ],
            ]);
        }
    }
}
