<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Moments extends Component
{
    public $all_location;

    public function __construct()
    {
        $this->all_location = [
            "Дворцовая площадь" => "dwor-p.webp",
            "Сенатская площадь" => "senat-p.webp",
            "Адмиралтейство" => "admiral.webp",
            "Стрелка Васильевского острова" => "strelka.webp",
            "Петропавловская крепость" => "petropavl.webp",
            "Казанский собор" => "kazan.webp",
            "Государственный Эрмитаж" => "ermit.webp",
            "Юсуповский Дворец" => "ysup.webp",
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.moments');
    }
}
