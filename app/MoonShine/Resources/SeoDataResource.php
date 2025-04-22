<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\SeoData;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<SeoData>
 */
class SeoDataResource extends ModelResource
{
    protected string $model = SeoData::class;

    protected string $title = 'SEO';

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function filters(): array
    {
        return [
            Text::make('Заголовок SEO', 'seo_title')->sortable(),
            Text::make('Описание SEO', 'seo_description'),
            Text::make('Заголовок страницы', 'page_title')->sortable(),
        ];
    }


    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir('seo'),
            Text::make('Ссылка', 'url'),
            Text::make('Заголовок SEO', 'seo_title')->sortable(),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Ссылка', 'url'),
            Text::make('Заголовок SEO', 'seo_title')->sortable(),
            Text::make('Описание SEO', 'seo_description'),
            Image::make('Изображение', 'img')->dir('seo'),
            Text::make('Заголовок страницы', 'page_title')->sortable(),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Ссылка', 'url'),
            Text::make('Заголовок SEO', 'seo_title')->sortable(),
            Text::make('Описание SEO', 'seo_description'),
            Image::make('Изображение', 'img')->dir('seo'),
            Text::make('Заголовок страницы', 'page_title')->sortable(),
        ];
    }

    /**
     * @param Seo $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
