<?php

namespace App\Http\Controllers;

use App\Models\programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class programController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = programs::all();
        return view('admin.dash-programs', compact('program'));
    }

    public function indexprogram(string $id)
    {
        $program = programs::find($id);
        return view('admin.dash-program', compact('program'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-program');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $program = new programs;
        $program->title = $request->input('title');
        $program->description = $request->input('description');
        $program->start_date = $request->input('start_date');
        $program->end_date = $request->input('end_date');
        $program->partners = $request->input('partners');
        if($request->hasFile('program_image'))
        {
            $file = $request->file('program_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/programs/', $filename);
            $program->program_image = $filename;
        }
        $program->save();
        return redirect()->back()->with('status','program added successfully');
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
        $program = programs::find($id);
        return view('admin.edit-dashprograms', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program = programs::find($id);
        
        $program->title = $request->input('title');
        $program->description = $request->input('description');
        $program->start_date = $request->input('start_date');
        $program->end_date = $request->input('end_date');
        $program->partners = $request->input('partners');
        if($request->hasFile('program_image'))
        {
            $destination = 'images/programs'.$program->program_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('program_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/programs', $filename);
            $program->program_image = $filename;
        }
        $program->update();
        return redirect()->back()->with('status','program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = programs::find($id);
        $destination = 'images/programs'.$program->program_image;

        if(File::exists($destination)){
            File::delete($destination);
        }

        $program->delete();
        return redirect()->back()->with('status','program deleted successfully');
    }
}
