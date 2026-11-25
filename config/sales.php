<?php

return [
    'show_marquee' => env('SHOW_MARQUEE', true),
    'show_sale' => env('SHOW_SALE', true),
    'default_sale' => env('DEFAULT_SALE', 500),

    // Дополнительная скидка на конкретных страницах: адрес => сумма в рублях
    'extra_sale' => [
        'tour/adygeia' => 500,
        'tour/sankt-peterburg-zima' => 500,
        'tour/kazan-new-year' => 500,
        'tour/tur-na-kremlevskuiu-elku' => 500,
        'tour/tur-elka-xxs' => 500,
        'tour/novogodnee-ledovoe-sou-tatiany-navka-kop' => 500,
    ],
];
