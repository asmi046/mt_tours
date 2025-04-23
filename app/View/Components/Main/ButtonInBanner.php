<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\TourCategory;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonInBanner extends Component
{
    public $buttons;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->buttons = TourCategory::where('show', 1)->orderBy('order', 'ASC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.button-in-banner');
    }
}
