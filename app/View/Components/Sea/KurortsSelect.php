<?php

namespace App\View\Components\Sea;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KurortsSelect extends Component
{
    public array $resorts;

    /**
     * Create a new component instance.
     */
    public function __construct(array $resorts = [])
    {
        $this->resorts = $resorts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sea.kurorts-select');
    }
}
