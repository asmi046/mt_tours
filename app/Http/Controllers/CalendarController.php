<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use App\Services\CalendarServices;

class CalendarController extends Controller
{
    protected function dey_normalize($cards)
    {

        usort($cards, function ($a, $b) {
            return $a['index'] > $b['index'];
        });

        $result = [];
        for($i=0; $i < count($cards)-1; $i++) {
            $result[] = $cards[$i];
            if (($cards[$i]['index'] + 1) != $cards[$i+1]['index']) {
                for ($j = $cards[$i]['index'] + 1; $j < $cards[$i+1]['index']; $j++) {
                    $result[] = [
                        'title' => null,
                        'index' => $j,
                        'empty' => true,
                        'post_lnk' => "#",
                        'dey_count' => "",
                        'price' => "",
                        'region' => "",
                    ];
                }
            }
        }
        $result[] = $cards[count($cards)-1];


        if ($cards[0]['index'] > 1) {
                for ($j = 1; $j < $cards[0]['index']; $j++) {
                    array_unshift($result, [
                        'title' => null,
                        'index' => $j,
                        'empty' => true,
                        'post_lnk' => "#",
                        'dey_count' => "",
                        'price' => "",
                        'region' => "",
                    ]);
                }
        }

        return $result;
        return $cards;
    }

    public function index($month = null)
    {
        $curent_month = $month?$month:date("d.m.Y", strtotime("01.05.2025"));

        $src_event = Calendar::all();
        $events = [];

        foreach ($src_event as $event) {
            $dates = $event->dates;

            foreach ($dates as $date) {
                // dd($date);
                $events[date('d.m.Y', strtotime($date['date']))][] = [
                    'title' => $event->title,
                    'index' => $date['position'],
                    'empty' => false,
                    'post_lnk' => $event->post_lnk,
                    'post_thumbinal' => $event->post_thumbinal,
                    'dey_count' => $event->dey_count,
                    'price' => $event->price,
                    'region' => $event->region,
                ];
            }
        }

        $final_events = [];
        foreach ($events as $date => $cards) {
            $events[$date] = $this->dey_normalize($cards);
        }

        $selector = [
            [
                'text' => CalendarServices::get_month_year("01.05.2025"),
                'param' => "01.05.2025"
            ],
            [
                'text' => CalendarServices::get_month_year("01.06.2025"),
                'param' => "01.06.2025"
            ],
            [
                'text' => CalendarServices::get_month_year("01.07.2025"),
                'param' => "01.07.2025"
            ],
            [
                'text' => CalendarServices::get_month_year("01.08.2025"),
                'param' => "01.08.2025"
            ]
        ];


        $month = CalendarServices::getMonth(date('n', strtotime($curent_month)), date('Y', strtotime($curent_month)), $events);

        return view('calendar.index', [
            'month' => $month,
            'selector' => $selector,
            'curent_month' => $curent_month,
        ]);
    }
}
