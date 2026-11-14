<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Redirect;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\MoonShineComponent;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Redirect>
 */
class RedirectResource extends ModelResource
{
    protected string $model = Redirect::class;

    protected string $title = 'Редиректы';

    public function activeActions(): ListOf
    {
        return parent::activeActions()->except('mass-deletion');
    }

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Откуда', 'from'),
            Text::make('Куда', 'to'),
            Text::make('Тип', 'type'),
            Switcher::make('Активен', 'active'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Откуда', 'from')
                ->placeholder('/staryj-krym')
                ->required(),
            Text::make('Куда', 'to')
                ->placeholder('/tour/staryj-krym или https://...')
                ->required(),
            Select::make('Тип редиректа', 'type')
                ->options([
                    301 => '301 — постоянный',
                    302 => '302 — временный',
                ])
                ->default(301)
                ->required(),
            Switcher::make('Активен', 'active')->default(true),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Откуда', 'from'),
            Text::make('Куда', 'to'),
            Text::make('Тип', 'type'),
            Switcher::make('Активен', 'active'),
        ];
    }

    /**
     * @param  Redirect  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules($item): array
    {
        return [
            'from' => ['required', 'string', 'max:255', 'starts_with:/', 'unique:redirects,from'.($item?->id ? ','.$item->id : '')],
            'to' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:301,302'],
            'active' => ['boolean'],
        ];
    }
}
