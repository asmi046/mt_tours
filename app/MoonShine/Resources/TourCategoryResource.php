<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;

use App\Models\TourCategory;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Components\Layout\Box;
use MoonShine\Contracts\FieldContract;
use MoonShine\Laravel\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Contracts\ComponentContract;

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
                Text::make('Название', 'name')->required(),
                Slug::make('Ссылка', 'slug')->required(),
                Number::make('Порядок', 'order')->required(),
                Text::make('Имя шаблона', 'template_name'),
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
