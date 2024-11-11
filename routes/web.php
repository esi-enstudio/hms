<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','verified'])->group(function (){
    Route::inertia('/', 'Main')->name('home');
    Route::resource('/user', UserController::class);
});

Route::resources([
    'ddHouse'       => \App\Http\Controllers\DdHouseController::class,
    'md'            => \App\Http\Controllers\MdController::class,
    'zm'            => \App\Http\Controllers\ZmController::class,
    'manager'       => \App\Http\Controllers\ManagerController::class,
    'supervisor'    => \App\Http\Controllers\SupervisorController::class,
    'rso'           => \App\Http\Controllers\RsoController::class,
    'retailer'      => \App\Http\Controllers\RetailerController::class,
    'bp'            => \App\Http\Controllers\BpController::class,
    'account'       => \App\Http\Controllers\AccountController::class,
    'dmsOperator'   => \App\Http\Controllers\DmsOperatorController::class,
]);



require __DIR__ . '/auth.php';
