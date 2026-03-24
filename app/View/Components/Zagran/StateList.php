<?php

namespace App\View\Components\Zagran;

use App\Models\ZagranDestination;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StateList extends Component
{
    public $state_list;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->state_list = ZagranDestination::query()->orderBy('order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.zagran.state-list');
    }
}
