<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use App\Models\TourCategory;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\Contracts\FieldContract;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<TourCategory>
 */
class TourCategoryResource extends ModelResource
{
    protected string $model = TourCategory::class;

    protected string $title = 'Категории экскурсионных туров';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name'),
            Slug::make('Ссылка', 'slug'),
            Number::make('Порядок', 'order')
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    public function formFields(): array
    {
        return [
            Box::make([
                ID::make(),
                Switcher::make('Отображать на панели', 'show'),
                Text::make('Название', 'name'),
                TinyMce::make('Выводимое имя категории', 'html_name'),
                Text::make('Подзаголовок баннера', 'subtitle'),
                Image::make('Иконка кнопки', 'icon')->dir('cat'),
                Slug::make('Ссылка', 'slug')->required(),
                Number::make('Порядок', 'order')->required(),
                Text::make('Имя шаблона', 'template_name'),


                Text::make('Верхнее описание', 'top_title')->unescape(),
                TinyMce::make('Описание под баннером', 'top_description'),
                TinyMce::make('Верхнее описание', 'description'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    public function detailFields(): array
    {
        return [
            ID::make(),
            Text::make('Название', 'name')->required(),
            Slug::make('Ссылка', 'slug')->required(),
            Number::make('Порядок', 'order')->required(),
            Text::make('Имя шаблона', 'template_name'),
            TinyMce::make('Верхнее описание', 'description'),
        ];
    }

    /**
     * @param TourCategory $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules($item): array
    {
        return [];
    }
}
