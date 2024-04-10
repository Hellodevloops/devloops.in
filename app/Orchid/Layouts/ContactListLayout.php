<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Contact;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;

class ContactListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'contacts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('firstname')
                ->sort()
                ->filter(Input::make())
                ->render(function (Contact $contact) {
                    return Link::make($contact->firstname)
                        ->route('platform.contact.edit', $contact);
                }),

            TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
