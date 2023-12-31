<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\User;

class UserAuthController extends Controller
{
    function sign_up_view() {
        return view('auth.user.sign_up');
    }

    function sign_up(Request $request) {
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email|unique:users,email",
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        User::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => $request->password
        ]);

        // and signin
        if(Auth::attempt($request->only(['email', 'password']))) {
            return back()->with('success', 'New User Register successfully.');
        }

    }

    function sign_in_view() {
        return view('auth.user.sign_in');
    }
    
    function sign_in(Request $request) {
        $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt($request->only(['email', 'password']))) {
            return back();
        }

        return back()->with("error", "email or password is incorrect.");
    }
}