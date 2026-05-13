<?php

namespace App\View\Components;

use App\Models\Slider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SliderMain extends Component
{
    public $slides;

    public function __construct()
    {
        $this->slides = Slider::orderBy('order')->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.slider-main');
    }
}
