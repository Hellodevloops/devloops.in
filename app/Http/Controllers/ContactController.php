<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Mail\ContactFormSubmitted;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
// {
//     public function index()
//     {
//         // Fetch blog posts from the database
//         $contacts = Contact::get();

//         return view('contact', compact('contacts'));
//     }
// }

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::first();
        return view('contact',compact('contacts'));
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
    // public function store(Request $request)
    //     {
    //         $validatedData = $request->validate([
    //             'firstname' => 'required|string|max:255',
    //             'lastname' => 'required|string|max:255',
    //             'phone' => 'nullable|string|max:20',
    //             'email' => 'nullable|email|max:255',
    //             // 'message' => 'nullable|string',
    //         ]);

    //         try {
    //             // save data to database
    //             $contact = new Contact();
    //             $contact->firstname = $validatedData['firstname'];
    //             $contact->lastname = $validatedData['lastname'];
    //             $contact->phone = $validatedData['phone'];
    //             $contact->email = $validatedData['email'];
    //             // $contact->message = $validatedData['message'];
    //             $contact->save();

    //             // Send email
    //         // $emailData = [
    //         //     'firstname' => $validatedData['firstname'],
    //         //     'lastname' => $validatedData['lastname'],
    //         //     'phone' => $validatedData['phone'],
    //         //     'email' => $validatedData['email'],
    //         //     'message' => $validatedData['message'],
    //         // ];

    //         // $mailcontroller = new MailController;
    //         // $mailcontroller->send_contact_email($validatedData['email'],$validatedData['firstname']);


    //         // Notification::make()
    //         // ->title('New Appointment')
    //         // ->sendToDatabase(auth()->user());


    //             // redirect to success page with success message
    //             return back()->with('success', 'Thank you for contacting us!');
    //         } catch (\Exception $e) {
    //             // redirect back with error message
    //             return back()->with('error', 'Error: ' . $e->getMessage());
    //         }
    //     }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            // 'message' => 'nullable|string',
        ]);

        try {
            // Save data to database
            $contact = new Contact();
            $contact->firstname = $validatedData['firstname'];
            $contact->lastname = $validatedData['lastname'];
            $contact->phone = $validatedData['phone'];
            $contact->email = $validatedData['email'];
            // $contact->message = $validatedData['message'];
            $contact->save();

            // Send email

            // Redirect to success page with success message
            return redirect()->back()->with('success', 'Thank you for contacting us!');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
