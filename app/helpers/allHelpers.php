<?php

use App\Services\SeoServices;

if (! function_exists('echo_days')) {
    function echo_days($days)
    {
        if ($days % 10 == 1 && ($days % 100 > 19 || $days < 11)) {
            return 'день';
        } elseif ($days % 10 > 1 && $days % 10 < 5 && ($days % 100 > 19 || $days < 11)) {
            return 'дня';
        } else {
            return 'дней';
        }
    }
}

if (! function_exists('seo_data')) {
    function seo_data(?string $ogImg = null): SeoServices
    {
        return app()->makeWith(SeoServices::class, ['ogImg' => $ogImg]);
    }
}

// Месяц текстом
if (! function_exists('get_month')) {
    function get_month($date)
    {
        $monthes = [
            1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля',
            5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа',
            9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря',
        ];

        return $monthes[(date('n', strtotime($date)))];
    }
}

// Форматирование номера телефона

if (! function_exists('phone_format')) {
    function phone_format($phone)
    {
        $phone = trim($phone);

        $res = preg_replace(
            [
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',
            ],
            [
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4$5',
                '$2$3$4',
                '$2$3$4',
            ],
            $phone
        );

        return $res;
    }
}

// Преобразование даты вида "14 июня" -> "14.06.<текущий год>" с опциональным добавлением 1 дня
if (! function_exists('ru_date_to_current_year')) {
    function ru_date_to_current_year(string $date, bool $addDay = true): string
    {
        $date = trim(mb_strtolower($date));
        $date = preg_replace('/\s+/', ' ', $date);

        $months = [
            'января' => 1,
            'февраля' => 2,
            'марта' => 3,
            'апреля' => 4,
            'мая' => 5,
            'июня' => 6,
            'июля' => 7,
            'августа' => 8,
            'сентября' => 9,
            'октября' => 10,
            'ноября' => 11,
            'декабря' => 12,
        ];

        if (! preg_match('/^(\d{1,2})\s+([\p{Cyrillic}]+)$/u', $date, $matches)) {
            return $date;
        }

        $day = (int) $matches[1];
        $monthName = $matches[2];

        if (! isset($months[$monthName])) {
            return $date;
        }

        $month = $months[$monthName];
        $year = (int) date('Y');

        if ($addDay) {
            $dateObj = new DateTime(sprintf('%d-%02d-%02d', $year, $month, $day));
            $dateObj->modify('+1 day');
            $day = (int) $dateObj->format('d');
            $month = (int) $dateObj->format('m');
            $year = (int) $dateObj->format('Y');
        }

        return sprintf('%02d.%02d.%d', $day, $month, $year);
    }
}
