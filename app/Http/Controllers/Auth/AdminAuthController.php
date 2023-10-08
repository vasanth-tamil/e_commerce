<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{
    function sign_in_view() {
        return view('auth.admin.sign_in');
    }
    
    function sign_in(Request $request) {
        $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);
        
        if(auth()->guard('admin')->attempt($request->only('email','password'))) {
            return redirect(route('admin.order'));
        }

        return back()->with("error", "email or password is incorrect.");
    }
}
