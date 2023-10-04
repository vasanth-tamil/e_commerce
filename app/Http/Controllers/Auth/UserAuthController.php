<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function sign_up_view() {
        return view('auth.user.sign_up');
    }

    function sign_up(Request $request) {
        return ;
    }

    function sign_in_view() {
        return view('auth.user.sign_in');
    }
    
    function sign_in(Request $request) {
        return ;
    }
}