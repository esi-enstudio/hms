<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','verified'])->group(function (){
    Route::inertia('/', 'Main')->name('home');
    Route::resource('/user', UserController::class);
});

// Verification Email Routes
Route::middleware(['auth'])->group(function (){
    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

    // Email Verification Notice
    Route::get('/email/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');

    // Email Verification Handler
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'handler'])->middleware(['signed'])->name('verification.verify');

    // Resending Verification Email
    Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])->middleware(['throttle:6,1'])->name('verification.send');
});

Route::middleware(['guest'])->group(function (){
    // Login
    Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'attempt'])->name('login.attempt');

    // Register
    Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'attempt'])->name('register.attempt');

    // Reset Password
    Route::get('/forgot-password', [ResetPasswordController::class, 'requestPassword'])->name('password.request');

    Route::post('/forgot-password', [ResetPasswordController::class, 'sendEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetForm'])->name('password.reset');

    Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
});
