<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // show register form
    public function register() {
        return view('users.register');
    }

    // register new user
    public function store() {
        // Validate
        $validated = request()->validate([
            'name' => ['required', 'min:3'],
            'password' => 'required|min:3|confirmed'
        ]);

        // Hash password
        $validated['password'] = bcrypt($validated['password']);

        // Create new user
        $user = User::create($validated);

        // Log in new user
        auth()->login($user);

        return redirect('/')->with('message', 'Register and Log in Success!');
    }

    // show login form
    public function login() {
        return view('users.login');
    }

    // login user
    public function authenticate() {
        // Validate
        $validated = request()->validate([
            'name' => ['required', 'min:3'],
            'password' => 'required|min:3'
        ]);

        // Attempt login
        if (auth()->attempt($validated)) {
            return redirect('/')->with('message', 'Login Success!');
        } else {
            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ]);
        }

        return redirect('/')->with('message', 'Login Success!');
    }

    // logout user
    public function logout() {
        auth()->logout();

        return redirect('/')->with('message', 'Logout Success!');
    }
}
