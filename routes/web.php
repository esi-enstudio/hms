<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function (){
    Route::inertia('/', 'Main')->name('home');
    Route::resource('/user', UserController::class);
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function (){
    // Login
    Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'attempt'])->name('login.attempt');

    // Register
    Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'attempt'])->name('register.attempt');
});
