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

        //create an application form in the database
        $applicationForm = new volunteer;
        $applicationForm->name = $request->name;
        $applicationForm->email = $request->email;
        $applicationForm->phone_number = $request->phone_number;
        $applicationForm->gender = $request->gender;
        $applicationForm->profession = $request->prfession;
        $applicationForm->save();

        //return a response
        return redirect('/become-volunteer')->with('Your application has been submitted successfully!');
    }
}
