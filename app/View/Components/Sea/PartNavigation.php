<?php

namespace App\View\Components\Sea;

use App\Models\SeaDestination;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PartNavigation extends Component
{
    public $resorts_krasnodar;

    public $resorts_krim;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $all_distinations = SeaDestination::select('*')->with('resorts')->get();
        $this->resorts_krasnodar = $all_distinations->where('id', 1)->first()->resorts;
        $this->resorts_krim = $all_distinations->where('id', 2)->first()->resorts;
        // dd($this->resorts_krasnodar, $this->resorts_krim, $all_distinations);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sea.part-navigation');
    }
}
