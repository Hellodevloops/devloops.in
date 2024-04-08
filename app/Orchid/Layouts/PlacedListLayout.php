<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Placed;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;

class PlacedListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'placeds';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
   ->sort()
   ->filter(Input::make()) ->sort()
   ->render(function (Placed $placed) {
       return Link::make($placed->title)->route('platform.placed.edit', $placed);
   }),

   TD::make('created_at', __('Created'))
   ->sort()
   ->render(fn (placed $placed) => $placed->created_at->toDateTimeString()),
   TD::make('updated_at', __('updated_at'))
   ->sort()
   ->render(fn (placed $placed) => $placed->created_at->toDateTimeString()),


                TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Placed $placed) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('View'))
                                ->route('platform.placed.edit', $placed)
                                ->icon('eye'),

                            // Button::make(__('Delete'))
                            //     ->icon('trash')
                            //     ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            //     ->method('remove', [
                            //         'id' => $contact->id,
                            //     ]),
                        ]);
                }),
        ];
    }
}
