<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
                               'name' => 'required',
                               'email' => 'required|email',
                               'subject' => 'required',
                               'message' => 'required',
                           ]);

        $data = $request->all();

        // Store the form data in the database
        $submission = new Contact([
                                                    'name' => $request->input('name'),
                                                    'email' => $request->input('email'),
                                                    'subject' => $request->input('subject'),
                                                    'message' => $request->input('message'),
                                                ]);

        if ($submission->save()){
            // Send an email to the admin
            Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
                $message->to('info@cidosouthsudan.org');
                $message->subject($data['subject']);
            });

            // You can add a success message or redirect back to the contact page
            return redirect()->back()->with('success', 'Your message has been sent.');
        }

        return redirect()->back()->with('error', 'Your message could not be sent.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
