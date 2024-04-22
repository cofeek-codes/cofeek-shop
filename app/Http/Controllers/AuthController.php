<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginform()
    {
        return view('forms.login');
    }

    public function login(Request $request)
    {
        $validatedRequest = $request->validate([
            'login' => 'required',
            'password' => 'required|min:3',
        ]);
        if (!Auth::attempt($validatedRequest)) {
            return redirect()->back()->withErrors('invalid credentials');
        } else {
            return redirect()->route('home');
        }
    }

    public function registerform()
    {
        return view('forms.register');
    }

    public function register(Request $request)
    {
        return dd($request);
    }
}
