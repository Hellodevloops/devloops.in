<?php

namespace App\Orchid\Layouts;

use App\Models\Career;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;

class CareerListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'careers';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
                ->sort()
                ->filter(Input::make())
                ->render(function (Career $carrer) {
                    return Link::make($carrer->title)
                        ->route('platform.career.edit', $carrer);
                }),

            TD::make('department', 'assocated department')
                ->sort(),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
