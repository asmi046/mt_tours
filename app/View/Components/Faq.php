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

    public string $jsonLd;

    public function __construct(string $section)
    {
        $this->section = $section;
        $this->items = FaqItem::query()
            ->where('section', $section)
            ->orderBy('sort_order')
            ->get();

        $this->jsonLd = $this->items->isNotEmpty()
            ? json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $this->items->map(fn ($item) => [
                    '@type' => 'Question',
                    'name' => $item->question,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => strip_tags($item->answer ?? ''),
                    ],
                ])->values()->all(),
            ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
            : '';
    }

    public function render(): View|Closure|string
    {
        return view('components.faq');
    }
}
