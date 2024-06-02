<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('/', function () {
    return to_route('show-login-form');
});

Route::get('login', [LoginController::class, 'showLoginForm'])
    ->name('show-login-form');
Route::post('login', [LoginController::class, 'login'])
    ->name('login');
Route::post('logout', [LogoutController::class, 'logout'])
    ->name('logout');

Route::get('registration', [RegistrationController::class, 'showRegistrationForm'])
    ->name('show-registration-form');
Route::post('registration', [RegistrationController::class, 'registration'])->name('registration');
