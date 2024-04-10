<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Course;
use App\Models\Team;
use App\Models\Batch;
use App\Models\Contact;
use App\Mail\ContactFormSubmitted;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $contacts = Contact::first();
        $blog_posts = Post::latest()->take(3)->get(); // Order posts by creation date in descending order
        // $banners = Banner::latest()->take(7)->get(); // Order posts by creation date in descending order
         $banner = Banner::all();
         $team = Team::all();
         $services = Service::latest()->take(6)->get(); // Order services by creation date in descending order
        $testimonials = Testimonial::all();
        $courses = Course::latest()->take(3)->get();
        $batch = Batch::all();
        // Pass the posts to the view for listing
        return view('welcome', ['contacts' => $contacts,'blog_posts' => $blog_posts,'banner' => $banner,'team' => $team,'services' => $services,'testimonials' => $testimonials,'courses' => $courses,'batch' => $batch]);
    }
}
