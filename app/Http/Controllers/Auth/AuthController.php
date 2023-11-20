<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function authenticateSuperAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the authenticated user is a super admin
            if ($user->is_admin) {
                // The user is a super admin
                return redirect()->route('dashboard'); // Redirect to the super admin dashboard or another appropriate route
            }

            // The user is not a super admin
            Auth::logout();
            return back()->withErrors(['email' => 'You do not have super admin privileges']);
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
