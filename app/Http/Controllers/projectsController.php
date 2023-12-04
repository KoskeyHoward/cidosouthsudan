<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Share;
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
    public function home()
    {
        $project = Projects::all();
        return view('projects', compact('project'));
    }
    public function homeproject(string $id)
    {
        $project = Projects::find($id);
        return view('project', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-project');
    }

    /**
     * Share in socials.
     */

    //  public function share($id){

    //     $project = Projects::find($id);

    //     // Check if the project exists
    //     if (!$project) {
    //         abort(404); // Or handle the case where the project is not found
    //     }

    //     $shareButtons = \Share::page(
    //         url('/project'.$id),
    //     )
    //     ->facebook()
    //     // ->instagram()
    //     ->twitter()
    //     ->whatsapp();

    //     return view('project', compact('project', 'shareButtons'));
    // }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new projects;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->category = $request->input('category');
        $project->image1_description = $request->input('image1_description');
        $project->image2_description = $request->input('image2_description');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        
        if($request->hasFile('image1'))
        {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects/', $filename);
            $project->image1 = $filename;
        }

        if($request->hasFile('image2'))
        {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects/', $filename);
            $project->image2 = $filename;
        }

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
        $project->category = $request->input('category');
        $project->image1_description = $request->input('image1_description');
        $project->image2_description = $request->input('image2_description');
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
        if($request->hasFile('image1'))
        {
            $destination = 'images/projects'.$project->image1;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects', $filename);
            $project->image1 = $filename;
        }
        if($request->hasFile('image2'))
        {
            $destination = 'images/projects'.$project->image2;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects', $filename);
            $project->image2 = $filename;
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

        // Delete additional images (if they exist)
        $additionalImages = ['images/projects/'.$project->image1, 'images/projects/'.$project->image2];
            foreach ($additionalImages as $additionalImage) {
                if (File::exists($additionalImage)) {
                    File::delete($additionalImage);
                }
            }

        // Delete the project record
        $project->delete();
        return redirect()->back()->with('status','project deleted successfully');
    }

    public function sidebar()
    {
        $program = programs::take(3)->get();
        $project = projects::take(3)->get();
        return view('project', compact('program', 'project'));
    }
}
