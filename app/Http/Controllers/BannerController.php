<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        //$posts = Post::all();

        $banner = Banner::all();
        // $layout = Layout::first();
        return view('welcome', compact('banner'));

    }
}

