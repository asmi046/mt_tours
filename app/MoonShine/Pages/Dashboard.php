<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Pages\Page;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\MoonShineComponent;

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Майские туры Мир Туризма46';
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
	{
		return [
            ActionButton::make(
                label: 'На сайт',
                url: route('home'),
            )
        ];
	}
}
