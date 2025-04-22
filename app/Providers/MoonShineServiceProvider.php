<?php

declare(strict_types=1);

namespace App\Providers;

use Closure;
use MoonShine\MoonShine;
use MoonShine\Pages\Page;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuElement;
use App\MoonShine\Resources\TourResource;
use App\MoonShine\Resources\SeoDataResource;
use MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\TourCategoryResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuItem::make(
                static fn() => __('Туры'),
                new TourResource()
            )->icon('heroicons.outline.globe-alt'),

            MenuItem::make(
                static fn() => __('Категории'),
                new TourCategoryResource()
            )->icon('heroicons.rectangle-group'),

            MenuItem::make(
                static fn() => __('SEO'),
                new SeoDataResource()
            )->icon('heroicons.outline.chart-bar-square'),

            MenuItem::make(
                static fn() => __('Сброс кеша'),
                fn() => route('cache_clear'),
            )->icon('heroicons.arrow-path-rounded-square'),

            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

            // MenuItem::make('Documentation', 'https://moonshine-laravel.com/docs')
            //     ->badge(fn() => 'Check')
            //     ->blank(),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
