<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return to_route('home');
        } else {
            $user = User::where('email', $validated['email'])->first();

            if (!$user) {
                return back()->withErrors([
                    'email' => 'Email does not match our records.',
                ]);
            }

            if ($user->password !== $validated['password']) {
                return back()->withErrors([
                    'password' => 'Incorrect password.',
                ]);
            }
        }
    }
}
