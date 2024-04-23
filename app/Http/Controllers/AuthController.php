<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $requestData = $request->all();
        $validatedRequestData = $request->validate([
            'rules' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'login' => 'required',
            'password' => 'required',

        ]);

        $validatedRequestData['role_id'] = 1;
        $validatedRequestData['password'] = bcrypt($validatedRequestData['password']);


        $newUser = User::create($validatedRequestData);

        Auth::loginUsingId($newUser->id);

        return redirect('/');
    }

    public function logout()
    {
        if (Auth::check())
            Auth::logout();

        return redirect('/');
    }
}
