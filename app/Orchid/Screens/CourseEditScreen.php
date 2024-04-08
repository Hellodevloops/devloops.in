<?php

namespace App\Orchid\Screens;

use App\Models\Course;
// use App\Models\Post;
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
use Orchid\Screen\Fields\Select;

class CourseEditScreen extends Screen
{
    /**
     * @var Course
     */
    public $course;

    /**
     * Query data.
     *
     * @param course $course
     *
     * @return array
     */
    public function query(Course $course): array
    {
        $course->load('attachment');
        return [
            'course' => $course ?? new Course(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->course->exists ? 'Edit course' : 'Creating a new course';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Courses";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create course')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->course->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->course->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->course->exists),
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
                Input::make('course.title')
                    ->title('Title')
                    ,

                    Cropper::make('course.hero')
                    ->accept('image/jpeg,image/png,image/webp')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ,


                    Input::make('course.description')
                    ->title('Description')
                    ,

                    Input::make('course.keyword')
                    ->title('Keyword')
                   ,

                   Input::make('course.metatitle')
                   ->title('Metatitle')
                  ,

                  Input::make('course.metadescription')
                  ->title('Metadescription')
                 ,



                Quill::make('course.body')
                    ->title('Main text'),

                Upload::make('course.attachment')
                    // ->groups('pdf')
                    ->maxFiles(1),

                    // Upload::make('course.attachment')
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
    public function createOrUpdate(Course $course, Request $request)
    {
        $course->fill($request->get('course'))->save();

        $course->attachment()->syncWithoutDetaching(
            $request->input('course.attachment', [])
        );



        Alert::info('You have successfully created or updated the course.');

        return redirect()->route('platform.course.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Course $course)
    {
        $course->delete();
        // $course->$request->get('course')->delete();

        Alert::info('You have successfully deleted the course.');

        return redirect()->route('platform.course.list');
    }
}
