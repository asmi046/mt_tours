<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\TourResource;
use App\MoonShine\Resources\TourCategoryResource;
use App\MoonShine\Resources\SeoDataResource;

use MoonShine\MenuManager\MenuItem;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make(
                static fn() => __('Туры'),
                TourResource::class,
            )->icon('globe-alt'),

            MenuItem::make(
                static fn() => __('Категории'),
                TourCategoryResource::class,
            )->icon('rectangle-group'),

            MenuItem::make(
                static fn() => __('SEO'),
                SeoDataResource::class,
            )->icon('chart-bar-square'),

            MenuItem::make(
                static fn() => __('Сброс кеша'),
                fn() => route('cache_clear'),
            )->icon('arrow-path-rounded-square'),

            ...parent::menu(),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
