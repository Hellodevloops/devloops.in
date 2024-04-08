<?php

namespace App\Orchid\Screens;

use App\Models\Career;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;

class CareerEditScreen extends Screen
{
    /**
     * @var Career
     */
    public $career;

    /**
     * Query data.
     *
     * @param Career $career
     *
     * @return array
     */
    public function query(Career $career): array
    {
        return [
            'career' => $career
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->career->exists ? 'Edit career' : 'Creating a new career';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Careers";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create career')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->career->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->career->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->career->exists),
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
                Input::make('career.title')
                    ->title('Title')
                    ->placeholder('Enter a captivating job title')
                    ->help('Specify a short, descriptive title for this career opportunity.'),

                Input::make('career.location')
                    ->title('Location')
                    ->placeholder('Enter the primary location of the job')
                    ->help('Specify the main location for this career opportunity.'),

                Input::make('career.content')
                    ->title('Content')
                    ->placeholder('Enter the department or team name')
                    ->help('Specify the department or team associated with this career opportunity.'),

                // Input::make('career.status')
                //     ->title('Status')
                //     ->placeholder('Enter the current status of the job opening')
                //     ->help('Specify the current status of this career opportunity.'),

                // Add more fields as needed

            ]),
        ];

    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->career->fill($request->get('career'))->save();

        Alert::info('You have successfully created a career.');

        return redirect()->route('platform.career.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->career->delete();

        Alert::info('You have successfully deleted the career.');

        return redirect()->route('platform.career.list');
    }
}
