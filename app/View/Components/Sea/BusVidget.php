<?php

namespace App\View\Components\Sea;

use App\Models\BusCatalog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BusVidget extends Component
{
    public $buses;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->buses = BusCatalog::select()
            ->orderBy('order')
            ->take(4)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sea.bus-vidget');
    }
}
