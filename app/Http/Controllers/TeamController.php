<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        $team = Team::all();
        // $layout = Layout::first();
        return view('welcome', compact('team'));

    }
}

