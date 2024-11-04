<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Main');
})->name('home');

Route::inertia('/about', 'About', ['data' => 'Some Data'])->name('about');

Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'attempt'])->name('login.attempt');
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
Route::post('/register', [RegisterUserController::class, 'attempt'])->name('register.attempt');
