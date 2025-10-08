<?php

namespace App\View\Components;

use Closure;
use App\Models\Tour;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryAnyTours extends Component
{
    public string $categoryName;
    public $catCards = null;
    /**
     * Create a new component instance.
     */
    public function __construct(string $categoryName = 'Любая категория')
    {
        $this->categoryName = $categoryName;
        $cat = TourCategory::where('name', $categoryName)->first();

        if ($cat) {
            $this->catCards = $cat->tours;
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-any-tours');
    }
}
