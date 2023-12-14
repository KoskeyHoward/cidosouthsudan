<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $users=User::query()->where('role_id','<>',2)->get();
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
       return view('admin.user-management',compact('usersArray','roles'));
    }

    public function profile(string $id){
        $user = User::find($id);
        $userCount = User::count();
        $roleName = Role::query()->where('id', $user->role_id)->first()->name ?? '';
        return view('admin.user-profile', compact('user', 'roleName', 'userCount'));
    }
    public function Volunteers()
    {
        //
        $volunteers = User::query()->where('role_id', 3)->get();;
        $usersArray =[];
        foreach($volunteers as $user){
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
       return view('volunteer',compact('usersArray','roles'));
    }
    public function VolunteersIndex()
    {
        //
        $volunteers = User::query()->where('role_id', 3)->get();;
        $usersArray =[];
        foreach($volunteers as $user){
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
       return view('admin.dash-volunteers',compact('usersArray','roles'));
    }
    public function employees()
    {
        //
        $employees = User::query()->where('role_id', 1)->get();;
        $usersArray =[];
        foreach($employees as $user){
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
       return view('about',compact('usersArray','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create($id=null)
    {
        //
        $user=null;
        if($id){
            $user = User::where('id',$id)->first();
        }
        return view('admin.new-user',['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id=null)
    {
        //  
        $user = new User;
        $valid=$request->validate([
        'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
        'email' => 'required|email|unique:users',
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
        
        if($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $profileImage = time().'.'.$extension;
            $file->move('images/users/', $profileImage);
            $user->profile_image = $profileImage;
        }else{
            $profileImage = asset('images/users/person.png');
        }
            // if ($request->hasFile('profile_image')) {

            //     $image = $request->file('profile_image');
            //     $profileImage = 'profile_' . time() . '.' . $image->getClientOriginalExtension();
            //     $image->move(public_path('images/users'), $profileImage);
            // }else{
            //     $profileImage = asset('images/users/person.png');
            // }

        // $user=User::query()->updateOrCreate(['id'=>$id],[
        //     'name'=>$request->input('name'),
        //     'email'=>$request->input('email'),
        //     'role_id'=>$request->input('role'),
        //     'password'=>'null',
        //     'profile_image' => $profileImage,
        //     'phone_number' => $request->input('phone_number'),
        //     'profession' => $request->input('profession'),
        //     'gender' => $request->input('gender'),
            
        // ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role');
        $user->phone_number = $request->input('phone_number');
        $user->profession = $request->input('profession');
        $user->gender = $request->input('gender');
        $user->password =('null');


        $userRole =$request->input('role');
        if($userRole === '3'){
            $user->assignRole('user');
        }
        elseif($userRole === '1'){
            $user->assignRole('volunteer');

        }
        $user->save();
        return redirect('/user-management')->with('status','User Created Successfully');
    }
        return redirect()->back()->with('error','Something went wrong');

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

     public function edit(string $id){
        $user = User::find($id);
        return view('admin.edit-profile', compact('user'));
     }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $valid=$request->validate([
            'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'email' => 'required|email|unique:users',
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
            $user = User::findOrFail($id);
            $profileImage = null;
    
            if($request->hasFile('profile_image'))
            {
                $file = $request->file('profile_image');
                $extension = $file->getClientOriginalExtension();
                $profileImage = time().'.'.$extension;
                $file->move('images/users/', $profileImage);
                $user->profile_image = $profileImage;
            }else{
                $profileImage = asset('images/users/person.png');
            }
    
            // $user=User::query()->updateOrCreate(['id'=>$id],[
            //     'name'=>$request->input('name'),
            //     'email'=>$request->input('email'),
            //     'role_id'=>$request->input('role'),
            //     'password'=>'null',
            //     'profile_image' => $profileImage,
            //     'phone_number' => $request->input('phone_number'),
            //     'profession' => $request->input('profession'),
            //     'gender' => $request->input('gender'),
                
            // ]);

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->role_id = $request->input('role');
            $user->phone_number = $request->input('phone_number');
            $user->profession = $request->input('profession');
            $user->gender = $request->input('gender');
            $user->password =('null');

            $userRole =$request->input('role');
            if($userRole === '3'){
                $user->assignRole('user');
            }
            elseif($userRole === '1'){
                $user->assignRole('volunteer');
    
            }
            $user->update();
            return redirect('/user-management')->with('status','User Created Successfully');
        }
            return redirect()->back()->with('error','Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $destination = 'images/users'.$user->profile_image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $user->delete();
            return redirect('/user-management')->with('status', 'User Deleted Successfully');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}
