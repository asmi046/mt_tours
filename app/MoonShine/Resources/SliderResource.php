<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Slider;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Slider>
 */
class SliderResource extends ModelResource
{
    protected string $model = Slider::class;

    protected string $title = 'Слайдер';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Image::make('Изображение', 'image'),
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
                Text::make('Ссылка', 'link'),
                Image::make('Изображение', 'image')->dir('main_bn')->removable(),
                Number::make('Порядок вывода', 'order'),
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
            Text::make('Ссылка', 'link'),
            Image::make('Изображение', 'image')->dir('main_bn')->removable(),
            Number::make('Порядок вывода', 'order'),
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
        ];
    }

    /**
     * @param  Slider  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'link' => ['required'],
            'image' => ($item->image === '') ? ['required', 'string', 'max:700'] : [],
            'order' => ['required'],
        ];
    }
}
