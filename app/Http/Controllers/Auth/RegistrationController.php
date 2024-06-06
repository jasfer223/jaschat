<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return Inertia::render('Auth/Registration');
    }

    public function registration(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'extension_name' => 'nullable',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return to_route('home');
    }
}
