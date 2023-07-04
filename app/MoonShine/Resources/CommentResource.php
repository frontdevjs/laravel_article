<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

use MoonShine\Decorations\Block;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class CommentResource extends Resource
{
	public static string $model = Comment::class;

	public static string $title = 'Comments';

    public string $titleField = 'name';

    protected bool $createInModal = true;
    protected bool $editInModal = true;
	public function fields(): array
	{
		return [
		    Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Статья', 'article_id'),
                Textarea::make('Комментировать', 'comment'),
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
