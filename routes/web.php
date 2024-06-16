<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return to_route('show-login-form');
    });

    // USER LOGIN
    Route::get('login', [LoginController::class, 'showLoginForm'])
        ->name('show-login-form');
    Route::post('login', [LoginController::class, 'login'])
        ->name('login');

    // USER REGISTRATION
    Route::get('registration', [RegistrationController::class, 'showRegistrationForm'])
        ->name('show-registration-form');
    Route::post('registration', [RegistrationController::class, 'registration'])
        ->name('registration');
});

Route::middleware(['auth'])->group(function () {
    // USER LOGOUT
    Route::post('logout', [LogoutController::class, 'logout'])
        ->name('logout');

    Route::inertia('home', 'User/Home')
        ->name('home');

    // TRY PROPS
    // Route::get('home', [HomeController::class, 'index'])
    //     ->name('home');
});
