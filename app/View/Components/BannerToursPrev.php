<?php

namespace App\View\Components;

use Closure;
use App\Models\Tour;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BannerToursPrev extends Component
{
    public $tours;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->tours = Tour::whereIn('id', [10, 7, 8, 9])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-tours-prev');
    }
}
