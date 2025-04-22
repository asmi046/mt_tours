<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Locations extends Component
{
    public $all_location;

    public function __construct()
    {
        $this->all_location = [
            "ГУМ" => "center_1.webp",
            "Храм Василия Блаженного" => "center_2.webp",
            "Театральная площадь" => "center_3.webp",
            "Храм Хреста Спасителя" => "center_4.webp",
            "Измайловский дворец" => "center_5.webp",
            "Каток на Красной площади" => "kr_pl.webp",
            "Александровский сад" => "alex-park.webp",
            "Никольская улица" => "nikolskaya.webp",
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.locations');
    }
}
