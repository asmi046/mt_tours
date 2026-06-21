<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Page\Page;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Components\ActionButton;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\MorphOne;
use App\MoonShine\Resources\SeoDataResource;

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Страницы';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make("Заголовок", 'title'),
            Slug::make("Ссылка", 'slug'),
            BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class)
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [

            Tabs::make([
                Tab::make('Основная информация', [
                    ID::make(),
                    Text::make("Заголовок", 'title'),
                    Slug::make("Ссылка", 'slug'),
                    BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class),
                    Text::make("Шаблон", 'template'),
                    TinyMce::make('Описание', 'description'),
                ]),
                Tab::make('Изображения', [
                    Image::make("Картинка", 'img')->dir('page')->removable(),
                    Json::make('Галерея', 'images')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Image::make("Изображение", 'img')->dir('page')->removable()
                    ]),
                ]),

                Tab::make('Файлы', [
                    Json::make('Файлы', 'files')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Textarea::make('Описание', 'description'),
                        File::make("Файл", 'file')->dir('page')->removable()
                    ])->removable(),
                ]),
            ]),

            MorphOne::make(
                'SEO',
                'seoData',
                resource: SeoDataResource::class
            ),

            // ActionButton::make(
            //     label: 'Перейти к странице',
            //     url: route('page', ($this->getItem())?$this->getItem()['slug']:"#"),
            // )
            // ->success()
            // ->blank()

        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Tabs::make([
                Tab::make('Основная информация', [
                    ID::make(),
                    Text::make("Заголовок", 'title'),
                    Slug::make("Ссылка", 'slug'),
                    BelongsTo::make("Родительская", 'parent_page', formatted: 'title', resource: PageResource::class),
                    Text::make("Шаблон", 'template'),
                    TinyMce::make('Описание', 'description'),
                ]),
                Tab::make('Изображения', [
                    Image::make("Картинка", 'img')->dir('page')->removable(),
                    Json::make('Галерея', 'images')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Image::make("Изображение", 'img')->dir('page')->removable()
                    ]),
                ]),

                Tab::make('Файлы', [
                    Json::make('Файлы', 'files')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Textarea::make('Описание', 'description'),
                        File::make("Файл", 'file')->dir('page')->removable()
                    ])->removable(),
                ]),
            ]),
        ];
    }


    protected function filters(): iterable
    {
        return [
            Text::make("Заголовок", 'title'),
            Text::make("Описание", 'description'),
        ];
    }

    /**
     * @param Page $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
        ];
    }
}
