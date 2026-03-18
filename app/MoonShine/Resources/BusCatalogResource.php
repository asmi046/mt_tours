<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\BusCatalog;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<BusCatalog>
 */
class BusCatalogResource extends ModelResource
{
    protected string $model = BusCatalog::class;

    protected string $title = 'Каталог автобусов';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Number::make('Порядок вывода', 'order'),
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
                Text::make('Заголовок', 'title'),
                Number::make('Порядок вывода', 'order'),
                TinyMce::make('Описание автобуса', 'description'),
                Json::make('Галерея', 'gallery')->fields([
                    Position::make(),
                    Image::make('Фото', 'file')->removable()->dir('buses'),
                    Text::make('Описание', 'description'),
                ])->removable(),
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
            Text::make('Заголовок', 'title'),
            Number::make('Порядок вывода', 'order'),
            TinyMce::make('Описание автобуса', 'description'),
            Json::make('Галерея', 'gallery')->fields([
                Position::make(),
                Image::make('Фото', 'file')->removable()->dir('buses'),
                Text::make('Описание', 'description'),
            ])->removable(),
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
        ];
    }

    /**
     * @param  BusCatalog  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'order' => ['required'],
        ];
    }
}
