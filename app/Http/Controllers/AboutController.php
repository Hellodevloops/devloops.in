<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\Home;
class BatchController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();

        // Pass the posts to the view for listing
        return view('about', ['team' => $team]);
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
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */

            // public function show(Post $post)
            // {
            //     // Retrieve the next and previous posts
            //     $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
            //     $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
            //     $recentposts = Post::orderBy('id', 'desc')->take(5)->get();
            //     $recentservices = Service::orderBy('id', 'desc')->take(5)->get();
            //     // Pass the current post, previous post, and next post to the view
            //     return view('blog.blog_detail', compact('post', 'previous', 'next','recentposts','recentservices'));
            // }


  public function show($slug)
 {
    //
 }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}