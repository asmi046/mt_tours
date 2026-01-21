<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $turkey = Destination::where('slug', 'turkey')->first();
        $egypt = Destination::where('slug', 'egypt')->first();
        $greece = Destination::where('slug', 'greece')->first();

        if ($turkey) {
            Price::create([
                'destination_id' => $turkey->id,
                'title' => 'Эконом тур в Турцию',
                'sort_order' => 1,
            ]);
            Price::create([
                'destination_id' => $turkey->id,
                'title' => 'Премиум тур в Турцию',
                'sort_order' => 2,
            ]);
        }

        if ($egypt) {
            Price::create([
                'destination_id' => $egypt->id,
                'title' => 'Стандартный тур в Египет',
                'sort_order' => 1,
            ]);
        }

        if ($greece) {
            Price::create([
                'destination_id' => $greece->id,
                'title' => 'Тур по островам Греции',
                'sort_order' => 1,
            ]);
        }
    }
}
