<?php

namespace App\Http\Controllers;
use App\Models\Career;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        // Fetch blog posts from the database
        $careers = Career::get();

        return view('career', compact('careers'));
    }
}
