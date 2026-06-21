<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\BusCatalogResource;
use App\MoonShine\Resources\CalendarResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\ScholTourResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\SliderResource;
use App\MoonShine\Resources\TourCategoryResource;
use App\MoonShine\Resources\TourResource;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\Layout\Layout;

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
            MenuItem::make('Меню', MenuResource::class)->icon('bars-3'),
            MenuItem::make('Слайдер', SliderResource::class)->icon('camera'),
            MenuItem::make(
                static fn () => __('Туры'),
                TourResource::class,
            )->icon('globe-alt'),

            MenuItem::make(
                static fn () => __('Категории'),
                TourCategoryResource::class,
            )->icon('rectangle-group'),

            MenuItem::make(
                static fn () => __('SEO'),
                SeoDataResource::class,
            )->icon('chart-bar-square'),

            MenuItem::make(
                static fn () => __('Сброс кеша'),
                fn () => route('cache_clear'),
            )->icon('arrow-path-rounded-square'),

            MenuItem::make('Страницы', PageResource::class)->icon('document-text'),

            MenuItem::make('Школьные туры', ScholTourResource::class)->icon('paper-clip'),

            MenuItem::make('Отзывы', ReviewResource::class)->icon('chat-bubble-oval-left'),

            MenuItem::make('Календарь', CalendarResource::class)->icon('calendar-days'),

            MenuGroup::make('Туры на море', [
                MenuItem::make('Наши автобусы', BusCatalogResource::class),
                MenuItem::make('Слайдер', SliderResource::class),
            ]),

            ...parent::menu(),

        ];
    }

    /**
     * @param  ColorManager  $colorManager
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
