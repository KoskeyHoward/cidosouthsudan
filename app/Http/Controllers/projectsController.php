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
        $projectCount = projects::count();
        return view('admin.dash-projects', compact('project', 'projectCount'));
    }
    public function indexproject(string $id)
    {
        $project = Projects::find($id);
        $projectCount = projects::count();
        return view('admin.dash-project', compact('project', 'projectCount'));
    }
    public function home()
    {
        $project = Projects::all();
        return view('projects', compact('project'));
    }
    public function homeproject(string $id)
    {
        $project = Projects::find($id);
        $programside = programs::take(3)->get();
        $projectside = projects::take(3)->get();

        // Prepare the sharing data
        $shareData = [
            'title' => $project->title,
            'description' => $project->description,
            'media' => $project->project_image,
            // Add links to different social media platforms with dynamic URL parameters
            'facebook' => 'https://www.facebook.com/sharer.php?u=' . urlencode(route('project', $id)),
            'twitter' => 'https://twitter.com/intent/tweet?text=' . urlencode($project->title) . '&url=' . urlencode(route('project', $id)),
            'pinterest' => 'https://pinterest.com/pin/create/button/?url=' . urlencode(route('project', $id)) . '&description=' . urlencode($project->description) . '&media=' . urlencode($project->project_image),
            'linkedin' => 'https://www.linkedin.com/share?mini=true&url=' . urlencode(route('project', $id)) . '&title=' . urlencode($project->title) . '&summary=' . urlencode($project->description),
            // Add more social media platforms as needed
            ];
        return view('project', compact('project', 'programside', 'projectside', 'shareData'));
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

    //  public function shareToSocials($id)
    //     {
    //         // Get the content from your table based on the ID
    //         $project = projects::find($id);

            

    //         // Return the view with share data
    //         return view('project', compact('shareData'));
    //     }
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
        $project = Projects::find($id);
        return view('project', compact('project'));
    }

    public function showPrev($id)
    {
        $project = Projects::where('id', '<', $id)->orderBy('id', 'desc')->first();
        return $project ? redirect()->route('project', ['id' => $project->id]) : redirect()->back();
    }

    public function showNext($id)
    {
        $project = Projects::where('id', '>', $id)->orderBy('id')->first();
        return $project ? redirect()->route('project', ['id' => $project->id]) : redirect()->back();
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
}
