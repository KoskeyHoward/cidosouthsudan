<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

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

            ];
            $usersArray[]=$userItem;
            $roles = Role::all();
        }
       return view('admin.user-management',compact('usersArray','roles'));
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
        $valid=$request->validate([
        'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
        'email' => 'required|email|unique:users',
        'role_id' => 'integer',
        'password' => 'nullable|min:8',
        ],
        [
            'name.regex'=>'Full name should be two name seperated with space. No digit and special character allowed.'
        ]
    );
    if($valid){
        
        $user=User::query()->updateOrCreate(['id'=>$id],[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'role_id'=>$request->input('role'),
            'password'=>'null'
            
        ]);
        $userRole =$request->input('role');
        if($userRole === '3'){
            $user->assignRole('user');
        }
        elseif($userRole === '1'){
            $user->assignRole('volunteer');

        }
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
    public function edit(Request $request,  $id= null)
    {
        //
        $valid=$request->validate([
            'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'email' => 'required|email',
            'role_id' => 'integer',
            'password' => 'nullable|min:8',
            ],
            [
                'name.regex'=>'Full name should be two name seperated with space. No digit and special character allowed.'
            ]
        );
        if($valid){
            $userId = Auth::user();
            if($userId){
                $user=User::updateOrCreate(['id'=>$id],[
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'role_id'=>$request->role,
                    'password'=>'null'
                    
                ]);
                $userRole =$request->input('role');
                if($userRole === '3'){
                    $user->assignRole('user');
                }
                elseif($userRole === '1'){
                    $user->assignRole('volunteer');
        
                }
                return redirect('/user-management')->with('status','User Updated Successfully');
            }
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
