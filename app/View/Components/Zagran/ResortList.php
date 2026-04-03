<?php

namespace App\View\Components\Zagran;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ResortList extends Component
{
    public Collection $resorts;

    /**
     * Create a new component instance.
     */
    public function __construct(Collection $resorts)
    {
        $this->resorts = $resorts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.zagran.resort-list');
    }
}
