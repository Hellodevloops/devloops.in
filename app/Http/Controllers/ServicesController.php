<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactFormSubmitted;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {

        $contacts = Contact::first();

        return view('iot', compact('contacts'));
    }

    public function indexone()
    {

        $contacts = Contact::first();

        return view('webdev', compact('contacts'));
    }

    public function indextwo()
    {

        $contacts = Contact::first();

        return view('healthcare', compact('contacts'));
    }

    public function indexthree()
    {

        $contacts = Contact::first();

        return view('product', compact('contacts'));
    }
}
