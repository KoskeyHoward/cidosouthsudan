<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    //
    public function changePassword(Request $request)
    {
        $user = User::find(Auth::id());
        $request->validate([
            'current_password' => 'required|password',
            'new_password' => 'required|string|min:8|confirmed',
        ]);


        // Check if the old password matches the user's current password
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'The old password does not match our records.');
        }

        // Check if the new password is the same as the old password
        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->with('error', 'Your new password cannot be the same as your old password.');
        }

        // Check if the new password is the same as confirmed password
        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->with('error', 'Your new password cannot be the same as your old password.');
        }
        
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('status', 'Password changed successfully!');
    }
}
