<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BpController;
use App\Http\Controllers\DdHouseController;
use App\Http\Controllers\DmsOperatorController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MdController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\RsoController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZmController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','verified'])->group(function (){
    Route::inertia('/', 'Main')->name('home');

    Route::resources([
        'user'          => UserController::class,
        'ddHouse'       => DdHouseController::class,
        'md'            => MdController::class,
        'zm'            => ZmController::class,
        'manager'       => ManagerController::class,
        'supervisor'    => SupervisorController::class,
        'rso'           => RsoController::class,
        'retailer'      => RetailerController::class,
        'bp'            => BpController::class,
        'account'       => AccountController::class,
        'dmsOperator'   => DmsOperatorController::class,
    ]);
});





require __DIR__ . '/auth.php';
