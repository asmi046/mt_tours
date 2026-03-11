<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Menu\Menu;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Menu>
 */
class MenuResource extends ModelResource
{
    protected string $model = Menu::class;

    protected string $title = 'Меню';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название меню', 'menu_name'),
            Text::make('Имя пункта', 'title'),
            Number::make('Родитель', 'parent'),
            Number::make('Порядок', 'order'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Название меню', 'menu_name'),
                Text::make('Имя пункта', 'title'),
                BelongsTo::make(
                    'Родитель',
                    'parentItem',
                    formatted: static fn (Menu $model): string => $model->title.' ('.$model->menu_name.')',
                    resource: MenuResource::class,
                ),
                Number::make('Порядок', 'order'),
                Text::make('Ссылка', 'lnk'),
            ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Название меню', 'menu_name'),
            Text::make('Имя пункта', 'title'),
            Number::make('Родитель', 'parent'),
            Number::make('Порядок', 'order'),
            Text::make('Ссылка', 'lnk'),
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название меню', 'menu_name'),
            Text::make('Имя пункта', 'title'),
        ];
    }

    /**
     * @param  Menu  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'menu_name' => ['required'],
            'title' => ['required'],
        ];
    }
}
