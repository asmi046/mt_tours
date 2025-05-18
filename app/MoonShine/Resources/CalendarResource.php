<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Calendar;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Calendar>
 */
class CalendarResource extends ModelResource
{
    protected string $model = Calendar::class;

    protected string $title = 'Calendars';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'post_thumbinal')->dir('calendar'),
            Text::make('Название', 'title')->sortable(),
            Text::make('Количество дней', 'dey_count'),
            Text::make('Цена', 'price'),
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
                Text::make('Название', 'title'),
                Text::make('Ссылка', 'post_lnk'),
                Image::make('Изображение', 'post_thumbinal')->dir('calendar'),
                Text::make('Количество дней', 'dey_count'),
                Text::make('Цена', 'price'),
                Text::make('Регион', 'region'),
                Json::make('Даты', 'dates')->fields([
                    Date::make('Дата', 'date'),
                    Number::make('Порядок', 'position'),
                ])->removable(),
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
            Text::make('Название', 'title'),
            Text::make('Ссылка', 'post_lnk'),
            Image::make('Изображение', 'post_thumbinal')->dir('calendar'),
            Text::make('Количество дней', 'dey_count'),
            Text::make('Цена', 'price'),
            Text::make('Регион', 'region'),
            Json::make('Даты', 'dates')->fields([
                    Date::make('Дата', 'date'),
                    Number::make('Порядок', 'position'),
                ])->removable(),
        ];
    }

    /**
     * @param Calendar $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'post_lnk' => ['required', 'string', 'max:255'],
            'post_thumbinal' => ($item->post_thumbinal === "")?['required', 'string', 'max:700']:[],
            'price' => ['required', 'string'],

        ];
    }
}
