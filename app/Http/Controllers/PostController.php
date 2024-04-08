<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    // public function index()
    // {
    //     // Fetch blog posts from the database
    //     $posts = Post::get();

    //     return view('blog.bloggrid', compact('posts'));
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$blogposts = Post::all();
        $blog_posts = Post::latest()->paginate(6); // Order blog posts by creation date in descending order
        // $layout = Layout::first();
        // $categories = Category::all(); // Fetch all categories
        // Pass the blog posts to the view for listing
        return view('blog.index', compact('blog_posts'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

   /**
 * Display the specified resource.
 *
 * @param  \App\Models\Blog\Post  $post
 * @return \Illuminate\Http\Response
 */

 public function show($slug)
{
    $post = Post::where('slug', $slug)->first();

    // Check if the post is not found and handle accordingly
    if (!$post) {
        abort(404); // or any other error handling mechanism you prefer
    }

    // Retrieve the next and previous posts
    $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
    $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
    $recentposts = Post::orderBy('id', 'desc')->take(3)->get();

    // Pass the current post, previous post, and next post to the view
    return view('blog.detail', compact('post', 'previous', 'next', 'recentposts'));
}



}
