<?php

namespace App\View\Components;

use App\Models\Tour;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerToursPrev extends Component
{
    public $tours;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->tours = [
            'Санкт-Петербург' => Tour::where('id', 9)->first(),
            'Казань' => Tour::where('id', 8)->first(),
            'Адыгея' => Tour::where('id', 10)->first(),
            'Севастополь' => Tour::where('id', 31)->first(),
        ];

        // collect([
        //     Tour::where('id', 9)->first(),
        //     Tour::where('id', 8)->first(),
        //     Tour::where('id', 10)->first(),
        //     Tour::where('id', 31)->first(),
        // ])->filter();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-tours-prev');
    }
}
