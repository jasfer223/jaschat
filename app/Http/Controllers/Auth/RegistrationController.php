<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return Inertia::render('Registration');
    }

    public function registration(Request $request)
    {
        //
    }
}
