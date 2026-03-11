<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CalendarResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\ScholTourResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\TourCategoryResource;
use App\MoonShine\Resources\TourResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                SeoDataResource::class,
                TourResource::class,
                TourCategoryResource::class,
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ReviewResource::class,
                CalendarResource::class,
                ScholTourResource::class,
                MenuResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ]);
    }
}
