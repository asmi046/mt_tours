<?php

namespace App\View\Components\Sea;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AllHotelMap extends Component
{
    public array $geoPoints;

    /**
     * Create a new component instance.
     */
    public function __construct(array $geoPoints)
    {
        $this->geoPoints = $geoPoints;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sea.all-hotel-map');
    }
}
