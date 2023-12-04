<?php

namespace App\Http\Controllers;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class volunteerApplicationController extends Controller
{
    public function apply(Request $request){
        //validate the form data
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone_number'=> 'required',
            'gender'=> 'required',
            'profession'=> 'required',
        ]);

        $data = $request->all();

        // Store the form data in the database
        $submission = new volunteer([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'profession' => $request->input('profession'),
        ]);

        if ($submission->save()) {
            // Send an email to the admin
            Mail::send('emails.volunteer', ['data' => $data], function ($message) use ($data) {
                $message->to('info@cidosouthsudan.org');
                $message->subject('Volunteer Application');
            });

            // You can add a success message or redirect back to the contact page
            return redirect()->back()->with('success', 'Your application has been sent.');
        }

        return redirect()->back()->with('error', 'Your application could not be sent.');
    }
}
