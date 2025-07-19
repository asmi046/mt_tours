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
        $this->tours = Tour::whereIn('id', [11, 10, 8, 9])->get();
        // $orderedItems = $items->sortBy(function ($item) use ($ids) {
        //     return array_search($item->id, $ids);
        // })->values();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-tours-prev');
    }
}
