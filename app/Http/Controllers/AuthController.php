<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function signupForm() {
        return view('auth.signup');
    }    

    function signupSubmission(Request $request) {
        User::create($request->all());
        return redirect()->route('auth.signin.form');
    }

    function signForm() {
        return view('auth.signin');
    }

    function signSubmission(Request $request) {
        $name = $request->input('name');
        $password = $request->input('password');

        $user = User::where('name', $name)
            ->where('password', $password)
            ->first();

        if($user->name == $name) {
            return redirect()->route('auth.signin.success');
        } else {
            return redirect()->route('auth.signin.form');
        }        
    }

    function successPage() {
        return view('auth.success');
    }
}
