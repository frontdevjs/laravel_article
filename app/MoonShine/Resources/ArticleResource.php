<?php

namespace App\MoonShine\Resources;


use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

use MoonShine\Decorations\Block;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Image;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Actions\FiltersAction;

class ArticleResource extends Resource
{
	public static string $model = Article::class;

	public static string $title = 'Articles';

    public string $titleField = 'name';

    protected bool $createInModal = true;
    protected bool $editInModal = true;
	public function fields(): array
	{
		return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Автор', 'author_id'),
                Text::make('Название статьи', 'name'),
                Textarea::make('Статья', 'content'),
                Image::make('Фото', 'image')->dir('/')->disk('public')
                    ->allowedExtensions(['jpg', 'jpeg', 'png', 'gif', 'bmp', 'avif']),
//                HasMany::make('Комменты', 'article_id'),
            ])


        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
