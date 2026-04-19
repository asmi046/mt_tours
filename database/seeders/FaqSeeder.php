<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'section' => 'default',
                'sort_order' => 0,
                'question' => 'Как выбрать подходящий тур?',
                'answer' => 'Оставьте заявку, и мы поможем подобрать тур по бюджету, датам и формату отдыха.',
            ],
            [
                'section' => 'default',
                'sort_order' => 10,
                'question' => 'Можно ли забронировать тур заранее?',
                'answer' => 'Да, бронирование доступно заранее. Уточните детали у менеджера перед оплатой.',
            ],
        ];

        foreach ($items as $item) {
            Faq::query()->updateOrCreate(
                [
                    'section' => $item['section'],
                    'question' => $item['question'],
                ],
                [
                    'sort_order' => $item['sort_order'],
                    'answer' => $item['answer'],
                ]
            );
        }
    }
}
