<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return inertia('Main');
//})->name('home');



Route::middleware(['auth'])->group(function (){
    Route::inertia('/', 'Main')->name('home');
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'attempt'])->name('login.attempt');

    Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'attempt'])->name('register.attempt');
});
