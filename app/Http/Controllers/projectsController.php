<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Projects::all();
        return view('admin.dash-projects', compact('project'));
    }
    public function indexproject(string $id)
    {
        $project = Projects::find($id);
        return view('admin.dash-project', compact('project'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new projects;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        if($request->hasFile('project_image'))
        {
            $file = $request->file('project_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects/', $filename);
            $project->project_image = $filename;
        }
        $project->save();
        return redirect()->back()->with('status','project added successfully');
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
        $project = Projects::find($id);
        return view('admin.edit-dashprojects', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = projects::find($id);
        
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        if($request->hasFile('project_image'))
        {
            $destination = 'images/projects'.$project->project_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('project_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects', $filename);
            $project->project_image = $filename;
        }
        $project->update();
        return redirect()->back()->with('status','project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Projects::find($id);
        $destination = 'images/projects'.$project->project_image;

        if(File::exists($destination)){
            File::delete($destination);
        }

        $project->delete();
        return redirect()->back()->with('status','project deleted successfully');
    }
}
