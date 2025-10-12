<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToursArrow extends Component
{
    public string $caption;
    /**
     * Create a new component instance.
     */
    public function __construct(string $caption = "Все туры")
    {
        $this->caption = $caption;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tours-arrow');
    }
}
