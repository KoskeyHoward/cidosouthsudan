<?php

namespace App\Http\Controllers;
use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Partners = Partners::all();
        return view('admin.dash-Partners', compact('Partners'));
    }

    public function indexPartners(string $id)
    {
        $Partners = Partners::find($id);
        $PartnerCount = Partners::count();
        return view('admin.partners-profile', compact('Partners', 'PartnerCount'));
    }
    public function home()
    {
        $Partners = Partners::all();
        return view('Partners', compact('Partners'));
    }

    public function partnerProgram(){
        $partner = Partners::all();
        return view('admin.new-program', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-partner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'Partner_image' => 'nullable|image|mimes:jpeg,png,jpg,|max:2048', 
    ]);

        $Partners = new Partners;
        $Partners->name = $request->input('name');
        $Partners->email = $request->input('email');
        $Partners->link = $request->input('link');
        
        if($request->hasFile('partner_image'))
        {
            $file = $request->file('partner_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/Partners/', $filename);
            $Partners->Partner_image = $filename;
        } 
        $Partners->save();
        return redirect()->back()->with('status','Partners added successfully');
        
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
        $Partners = Partners::find($id);
        return view('admin.edit-partner', compact('Partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Partners = Partners::find($id);
        
        $Partners->name = $request->input('name');
        $Partners->email = $request->input('email');
        $Partners->link = $request->input('link');
       
        if($request->hasFile('partner_image'))
        {
            $destination = 'images/Partners'.$Partners->partner_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('partner_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/Partners', $filename);
            $Partners->partner_image = $filename;
        }
        $Partners->update();
        return redirect()->back()->with('status','Partners updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $Partners = Partners::find($id);
        $destination = 'images/Partners'.$Partners->partners_image;

        if(File::exists($destination)){
            File::delete($destination);
        }

        $Partners->delete();
        return redirect()->back()->with('status','Partners deleted successfully');
    }
}
