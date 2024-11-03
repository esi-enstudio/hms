<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Main');
})->name('home');

Route::inertia('/about', 'About', ['data' => 'Some Data'])->name('about');

Route::inertia('/login', 'Auth/Login')->name('login');
Route::get('/register', [\App\Http\Controllers\Auth\RegisterUserController::class, 'create'])->name('register.create');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterUserController::class, 'register'])->name('register');
