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

        $this->tours = collect([
            Tour::where('id', 5)->first(),
            Tour::where('id', 10)->first(),
            Tour::where('id', 12)->first(),
            Tour::where('id', 1)->first(),
        ])->filter();

        // $this->tours = Tour::whereIn('id', [10, 9, 11])->get();
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
