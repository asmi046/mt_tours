<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\ScholTour;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Support\Attributes\SearchBy;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<ScholTour>
 */
#[SearchBy(['title'])]
class ScholTourResource extends ModelResource
{
    protected string $model = ScholTour::class;

    protected string $title = 'Школьные туры';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение тура', 'img')->dir(''),
            Text::make('Заголовок тура', 'title'),
            Text::make('Категория тура', 'category'),
            Number::make('Порядок сортировки', 'order'),
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
                Number::make('Порядок сортировки', 'order'),
                Image::make('Изображение тура', 'img')->dir(''),
                Text::make('Заголовок тура', 'title'),
                TinyMce::make('Описание тура', 'description'),
                Text::make('Категория тура', 'category'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Number::make('Порядок сортировки', 'order'),
            Image::make('Изображение тура', 'img')->dir(''),
            Text::make('Заголовок тура', 'title'),
            TinyMce::make('Описание тура', 'description'),
            Text::make('Категория тура', 'category'),
        ];
    }

    /**
     * @param ScholTour $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => 'required|string|max:255',
            'order' => 'required|integer',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок тура', 'title'),
            Text::make('Категория тура', 'category'),
        ];
    }
}
