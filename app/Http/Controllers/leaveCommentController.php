<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class leaveCommentController extends Controller
{
    public function comment(Request $request)
    {
        //
        $project = projects::all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'website' => 'nullable',
        ]);

        $data = $request->all();

        // Store the form data in the database
        $submission = new Comments([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'comment' => $request->input('comment'),
            'website' => $request->input('website'),
        ]);

        if ($submission->save()) {
            // Send an email to the admin
            Mail::send('emails.comment', ['data' => $data], function ($message) use ($data) {
                $message->to('info@cidosouthsudan.org');
                $message->subject('Project Comment');
            });

            // You can add a success message or redirect back to the project page
            return redirect()->back()->with('success', 'Your comment has been sent.');
        }

        return redirect()->back()->with('error', 'Your message could not be sent.');
    }
}
