<?php

namespace App\Http\Controllers;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class volunteerApplicationController extends Controller
{
    public function apply(Request $request){
        //validate the form data
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|max:255',
            'phone_number'=> 'required',
            'gender'=> 'required',
            'profession'=> 'required|string|max:255'
        ]);

        //create an application form in the database
        $applicationForm = new volunteer([
            
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'profession' => $request->input('profession')
        ]);
        ;

        if ($applicationForm->save()) {
            // Send an email to the admin
           
            return redirect()->back()->with('success','Your application has been submitted successfully!');
        }
        else{
            //return a response
            return redirect()->back()->with('error', 'Your message could not be sent.');
            
        }
       
    }
}
