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
            'Липецк' => Tour::where('id', 12)->first(),
            'Воронеж' => Tour::where('id', 10)->first(),
            'Тула' => Tour::where('id', 13)->first(),
            'Воронеж' => Tour::where('id', 38)->first(),
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
