<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{
    function sign_in_view() {
        if(!auth()->guard('admin')->check()) {
            return view('auth.admin.sign_in');
        }
        return redirect(route('admin.order'));
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

    function sign_out(Request $request) {
        if(auth()->guard('admin')->check()) {
            auth()->guard('admin')->logout();
        } 
        return redirect(route('admin.sign_in'));
    }
}
