<?php

namespace App\Http\Controllers;

use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteer = volunteer::all();
        return view('admin.dash-volunteers', compact('volunteer'));
    }

    public function indexvolunteer(string $id)
    {
        $volunteer = volunteer::find($id);
        return view('admin.volunteer-profile', compact('volunteer'));
    }
    public function home()
    {
        $volunteer = volunteer::all();
        return view('volunteer', compact('volunteer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-volunteer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'volunteer_image' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048', 
    ]);

        $volunteer = new volunteer;
        $volunteer->name = $request->input('name');
        $volunteer->email = $request->input('email');
        $volunteer->gender = $request->input('gender');
        $volunteer->phone_number = $request->input('phone_number');
        $volunteer->profession = $request->input('profession');
        $volunteer->facebook = $request->input('facebook');
        $volunteer->instagram = $request->input('instagram');
        $volunteer->twitter = $request->input('twitter');
        if($request->hasFile('volunteer_image'))
        {
            $file = $request->file('volunteer_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/volunteers/', $filename);
            $volunteer->volunteer_image = $filename;
        } 
        $volunteer->save();
        return redirect()->back()->with('status','volunteer added successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $volunteer = volunteer::find($id);
        return view('admin.edit-volunteer', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $volunteer = volunteer::find($id);
        
        $volunteer->name = $request->input('name');
        $volunteer->email = $request->input('email');
        $volunteer->gender = $request->input('gender');
        $volunteer->phone_number = $request->input('phone_number');
        $volunteer->profession = $request->input('profession');
        $volunteer->facebook = $request->input('facebook');
        $volunteer->instagram = $request->input('instagram');
        $volunteer->twitter = $request->input('twitter');
        if($request->hasFile('volunteer_image'))
        {
            $destination = 'images/volunteers'.$volunteer->volunteer_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('volunteer_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/volunteers', $filename);
            $volunteer->volunteer_image = $filename;
        }
        $volunteer->update();
        return redirect()->back()->with('status','volunteer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $volunteer = volunteer::find($id);
        $destination = 'images/volunteers'.$volunteer->volunteer_image;

        if(File::exists($destination)){
            File::delete($destination);
        }

        $volunteer->delete();
        return redirect()->back()->with('status','volunteer deleted successfully');
    }
}
