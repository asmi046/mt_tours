<?php

namespace App\View\Components;

use App\Models\Faq as FaqItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Faq extends Component
{
    public string $section;

    public Collection $items;

    public function __construct(string $section)
    {
        $this->section = $section;
        $this->items = FaqItem::query()
            ->where('section', $section)
            ->orderBy('sort_order')
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.faq');
    }
}
