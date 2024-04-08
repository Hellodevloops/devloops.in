<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Batch;
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
use Orchid\Screen\Fields\DateRange;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Matrix;
class BatchEditScreen extends Screen
{
    /**
     * @var Batch
     */
    public $batch;

    /**
     * Query data.
     *
     * @param Batch $batch
     *
     * @return array
     */
    public function query(Batch $batch): array
    {
        $batch->load('attachment');
        return [
            'batch' => $batch ?? new Batch(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->batch->exists ? 'Edit batch' : 'Creating a new batch';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Batchs";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create batch')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->batch->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->batch->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->batch->exists),
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
                Input::make('batch.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this batch'),


                    Cropper::make('batch.hero')
                    ->accept('image/jpeg,image/png,image/webp')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(600)
                    ->height(400),


                // Relation::make('batchauthor')
                //     ->title('Author')
                //     ->required()
                //     ->fromModel(User::class, 'name'),

                // Quill::make('batch.body')
                //     ->title('Main text'),

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
public function createOrUpdate(Request $request)
    {
        $this->batch->fill($request->get('batch'))->save();

        Alert::info('You have successfully created a batch.');

        return redirect()->route('platform.batch.list');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Batch $batch)
    {
        $this->batch->delete();

        Alert::info('You have successfully deleted the batch.');

        return redirect()->route('platform.batch.list');
    }
}
