<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register() {
        return view('users.register');
    }

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

        return redirect('/');
    }
}
