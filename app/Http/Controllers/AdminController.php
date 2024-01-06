<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\UserRole;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::query()->where('role_id',2)->first();
        $users = User::query()->where('role_id',2)->get();
        $userCount = User::query()->where('role_id','<>',2)->count();
        $roleName = Role::query()->where('id', $user->role_id)->first()->name ?? '';
        $usersArray =[];
        foreach($users as $user){
            $userItem = [
                'name'=>$user->name,
                'email'=>$user->email,
                'id'=>$user->id,
                'role'=>Role::query()->where('id',$user->role_id)->first()->name ?? '',
                'profile_image' => $user->profile_image,
                'phone_number' => $user->phone_number,
                'profession' => $user->profession,
                'gender' => $user->gender,

            ];
            $usersArray[]=$userItem;
            $roles = Role::all();
        }
        // $roleName = Role::query()->where('id', $user->role_id)->first()->name ?? '';
        return view('admin.admin-profile', compact('user', 'users','roleName','userCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $admin = User::find($id)->where('role_id',2)->first();

        if(!$admin->role_id){
            $admin->role_id = 'super-admin';
        }
        return view('admin.edit-admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $admin = User::find($id)->where('role_id',2)->first();
        $valid=$request->validate([
            'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'email' => 'required|email',
            'role_id' => 'integer',
            'password' => 'nullable|min:8',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'nullable|string',
            'profession' => 'nullable|string',
            'gender' => 'nullable|string',
            ],
            [
                'name.regex'=>'Full name should be two name seperated with space. No digit and special character allowed.'
            ]
        );
        if($valid){
            $admin = User::findOrFail($id);
            $profileImage = null;
    
            if($request->hasFile('profile_image'))
            {
                $file = $request->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $profileImage = time().'.'.$extension;
                $file->move('images/users/', $profileImage);
                $admin->profile_image = $profileImage;
            }else{
                $profileImage = asset('images/users/person.png');
            }

            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->phone_number = $request->input('phone_number');
            $admin->profession = $request->input('profession');
            $admin->gender = $request->input('gender');
            $admin->password =('null');

            if (!$admin->role_id || $admin->role_id != '2') {
                $admin->role_id = '2'; // Assuming role_id is a string in this case
            }

            $userRole =$admin->role_id;
            if($userRole === '2'){
                $admin->assignRole('super-admin');
            }

            $admin->update();
            return redirect('/user-management')->with('status','User Created Successfully');
        }
            return redirect()->back()->with('error','Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
