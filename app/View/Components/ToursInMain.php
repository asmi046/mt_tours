<?php

namespace App\View\Components;

use Closure;
use App\Models\Tour;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ToursInMain extends Component
{
    public $all_tours;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->all_tours = Tour::where('title', 'NOT LIKE', '%РУСБОРГ%')->orderBy("order")->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tours-in-main');
    }
}
