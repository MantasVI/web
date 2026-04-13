<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignup() 
    {
        return view('signup');
    }
    public function signup(Request $request) 
    {
        $request->validate([ 
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'username' => 'required|max:10|unique:users',
            ]);

        if(User::create([
        'email' => $request->email,
        'password' => $request->password,
        'username' => $request->username,
        ])) {
            return redirect('/login');
        }
    }

    public function showLogin()
    {
        return view('login');

    }
    public function login(Request $request)
    {
     if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/home');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
