<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Tour;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Switcher;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Flex;
use MoonShine\UI\Components\ActionButton;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Laravel\Resources\ModelResource;
use App\MoonShine\Resources\TourCategoryResource;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;

/**
 * @extends ModelResource<Tour>
 */
class TourResource extends ModelResource
{
    protected string $model = Tour::class;

    protected string $title = 'Туры';


    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order')->sortable(),
            Text::make('Название', 'title'),
            Image::make('Изображение', 'img')->dir('tours'),
            Text::make('URL', 'slug'),
            // Date::make('Начало тура', 'start_data')->format('d.m.Y'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [

            Tabs::make([
                Tab::make('Основное', [
                    ID::make()->sortable(),
                    Number::make('Порядок', 'order'),
                    Url::make('Внешняя ссылка', 'out_lnk'),
                    Flex::make([
                        Text::make('Заголовок (h1)', 'title')->required(),
                        Text::make('Заголовок на карточке', 'title_card'),
                    ]),
                    TinyMce::make('Название на баннере', 'title_input'),
                    Text::make('URL', 'slug'),
                    Number::make('Количество дней', 'deycount')->required(),
                    Date::make('Основная дата тура', 'start_data')->format('d.m.Y')->required(),
                    Json::make('Указать несколько дат тура', 'multi_data')
                    ->removable()
                    ->fields([
                        Position::make(),
                        Date::make('Дата тура', 'start_data')->format('d.m.Y')
                    ]),

                    Switcher::make('Тур продан', 'soldout'),

                    Json::make('Варианты цены', 'prices')
                    ->removable()
                            ->fields([
                                Position::make(),
                                Text::make('Продано', 'soldout'),
                                Text::make('Цена', 'price'),
                                Text::make('Дата', 'data'),
                                Text::make('Комментарий', 'comment')
                    ]),


                ]),

                Tab::make('Категории', [
                    BelongsToMany::make("Категории", 'categories', resource: TourCategoryResource::class)
                ]),

                Tab::make('Описательная часть', [
                    TinyMce::make('Верхнее описание', 'top_description')->required(),
                    TinyMce::make('Входит в стоимость', 'in_price'),
                    TinyMce::make('За отдельную плату', 'out_price'),

                ]),

                Tab::make('Программа тура', [
                    TinyMce::make('Программа тура', 'program'),

                    Json::make('Программа тура', 'tour_program')
                    ->removable()
                            ->fields([
                                Position::make(),
                                Text::make('Тип программы', 'type'),
                                Number::make('№ дня', 'number'),
                                Text::make('Дата дня', 'date'),
                                TinyMce::make('Описание', 'description'),
                            ]),
                ]),

                Tab::make('Оформление страницы', [
                    Image::make('Изображение', 'img')->dir('tours'),
                    File::make("Фон шапки тура", 'header_bg')->dir('tours'),
                    Select::make("Нижний фон", "page_bg")->options([
                        'kazan_bg' => 'Казань',
                        'kudikina_bg' => 'Кудыкина гора',
                        'moskow_bg' => 'Москва',
                        'spb_bg' => 'СПБ',
                        'volgograd_bg' => 'Волгоград',
                        'adg_bg' => 'Адыгея',
                    ])->nullable(),
                ]),

                Tab::make('Галерея', [
                    Json::make('Галерея', 'galery')
                    ->removable()
                            ->fields([
                                Position::make(),
                                Image::make('Изображение', 'img')->dir('tours'),
                                Text::make('Заголовок', 'title'),
                                Switcher::make('В шапке', 'in_top')
                            ]),
                ])
            ]),

            ActionButton::make(
                label: 'Перейти к странице',
                url: route('tour_page', $this->getItem()['slug']),
            )
            ->success()
            ->blank()








        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order'),
            Url::make('Внешняя ссылка', 'out_lnk'),
            Text::make('Название', 'title'),
            TinyMce::make('Название на баннере', 'title_input'),
            Text::make('URL', 'slug'),
            Number::make('Количество дней', 'deycount'),
            Image::make('Изображение', 'img')->dir('tours'),
            Date::make('Основная дата тура', 'start_data')->format('d.m.Y'),
            TinyMce::make('Верхнее описание', 'top_description'),
            TinyMce::make('Программа тура', 'program'),
            TinyMce::make('Входит в стоимость', 'in_price'),
            TinyMce::make('За отдельную плату', 'out_price'),

            Json::make('Указать несколько дат тура', 'multi_data')
            ->fields([
                Position::make(),
                Text::make('Заголовок', 'title'),
            ]),

            Json::make('Программа тура', 'tour_program')
                    ->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title'),
                    ]),

            Json::make('Варианты цены', 'prices')
                    ->fields([
                        Position::make(),
                        Text::make('Цена', 'price'),
                        Text::make('Комментарий', 'comment')
                    ]),

            Json::make('Галерея', 'galery')
                    ->fields([
                        Position::make(),
                        Image::make('Изображение', 'img')->dir('tours'),
                        Text::make('Заголовок', 'title'),
                        Switcher::make('В шапке', 'in_top')
                    ])
        ];
    }

    /**
     * @param Tour $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules($item): array
    {
        return [];
    }
}
