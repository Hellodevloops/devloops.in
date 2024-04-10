<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Team;

class AboutController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        $team = Team::all();
        // $layout = Layout::first();
        return view('about', compact('team'));

    }
}
