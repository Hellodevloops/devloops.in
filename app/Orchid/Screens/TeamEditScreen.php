<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Team;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;

class TeamEditScreen extends Screen
{
    /**
     * @var Team
     */
    public $team;

    /**
     * Query data.
     *
     * @param Team $team
     *
     * @return array
     */
    public function query(Team $team): array
    {
        return [
            'team' => $team
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->team->exists ? 'Edit team' : 'Creating a new team';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Team";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create team')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->team->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->team->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->team->exists),
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
                Cropper::make('team.img')
                ->title('Image'),

                Input::make('team.name')
                ->title('name'),


                Input::make('team.position')
                ->title('position'),

                // Input::make('team.desc')
                // ->title('desc'),

            ]),



        ];
    }

    /**
     * @param Team    $team
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->team->fill($request->get('team'))->save();

        Alert::info('You have successfully created a team.');

        return redirect()->route('platform.team.list');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function remove()
    // {
    //     $this->team->delete();

    //     Alert::info('You have successfully deleted the team.');

    //     return redirect()->route('platform.team.list');
    // }
    public function remove()
    {
        $this->team->delete();

        Alert::info('You have successfully deleted the team.');

        return redirect()->route('platform.team.list');
    }
}
