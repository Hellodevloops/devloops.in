<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Team;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;


class TeamListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'teams';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name')
                ->sort()
                ->filter(Input::make())
                ->render(function (Team $team) {
                    return Link::make($team->name)
                        ->route('platform.team.edit', $team);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
