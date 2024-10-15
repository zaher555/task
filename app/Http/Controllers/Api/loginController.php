<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
    {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ],[
        'email.required'=>'email is required',
        'password.required'=>'password is required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
    }
}

