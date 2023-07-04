<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class AuthorResource extends Resource
{
	public static string $model = Author::class;

	public static string $title = 'Authors';

    public string $titleField = 'name';

    protected bool $createInModal = true;
    protected bool $editInModal = true;
	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Имя автора', 'name')
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
