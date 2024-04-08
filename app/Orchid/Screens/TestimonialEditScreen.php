<?php

namespace App\Orchid\Screens;

use App\Models\Testimonial;
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

class TestimonialEditScreen extends Screen
{
    /**
     * @var Testimonial
     */
    public $testimonial;

    /**
     * Query data.
     *
     * @param testimonial $testimonial
     *
     * @return array
     */
    public function query(Testimonial $testimonial): array
    {
        $testimonial->load('attachment');
        return [
            'testimonial' => $testimonial ?? new Testimonial(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->testimonial->exists ? 'Edit testimonial' : 'Creating a new testimonial';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Testimonials";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create testimonial')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->testimonial->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->testimonial->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->testimonial->exists),
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
                Input::make('testimonial.content')
                    ->title('Content'),


                    Cropper::make('testimonial.image')
                    ->accept('image/jpeg,image/png,image/webp')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ,


                    Input::make('testimonial.name')
                    ->title('Name')
                   ,


                    Input::make('testimonial.designation')
                    ->title('Designation')
                   ,

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
    public function createOrUpdate(Testimonial $testimonial, Request $request)
    {
        $testimonial->fill($request->get('testimonial'))->save();

     // Store the attachments
// $attachments = $request->input('course.attachment');
// $course->attachments()->attach($attachments);



        Alert::info('You have successfully created or updated the testimonial.');

        return redirect()->route('platform.testimonial.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Testimonial $testimonial)
    {
        $testimonial->delete();
        // $testimonial->$request->get('testimonial')->delete();

        Alert::info('You have successfully deleted the testimonial.');

        return redirect()->route('platform.testimonial.list');
    }
}
