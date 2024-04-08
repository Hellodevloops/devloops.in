<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Placed;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;

class PlacedEditScreen extends Screen
{
    /**
     * @var Placed
     */
    public $placed;

    /**
     * Query data.
     *
     * @param Placed $placed
     *
     * @return array
     */
    public function query(Placed $placed): array
    {
        $placed->load('attachment');
        return [
            'placed' => $placed ?? new Placed(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->placed->exists ? 'Edit placed' : 'Creating a new placed';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "placed";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create placed')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->placed->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->placed->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->placed->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('placed.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this placed.'),

                    Select::make('placed.type')
                    ->options([
                        'placed'   => 'On Placed Slider',
                        'batch' => 'On Batch Page',
                    ])
                    ->empty('No select')
                    ->title('Select Area to display')
                    ->help('Where You want to display this Image'),

                    Cropper::make('placed.hero')
                    ->accept('image/jpeg,image/png,image/webp')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(600)
                    ->height(400),

                TextArea::make('placed.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),

                // Relation::make('post.author')
                //     ->title('Author')
                //     ->required()
                //     ->fromModel(User::class, 'name'),

                Quill::make('placed.body')
                    ->title('Main text'),

                    // Upload::make('post.attachment')
                    //     ->title('Attachment')
                    //     ->maxFiles(1)
                    //     ->acceptedFiles('image/*'),


            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Placed $placed, Request $request)
    {
        $placed->fill($request->get('placed'))->save();

     // Store the attachments
        $attachments = $request->input('placed.attachment');
    // $post->attachments()->attach($attachments);



        Alert::info('You have successfully created or updated the placed.');

        return redirect()->route('platform.placed.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(placed $placed)
    {
        $placed->delete();
        // $placed->$request->get('placed')->delete();

        Alert::info('You have successfully deleted the placed.');

        return redirect()->route('platform.placed.list');
    }
}
