<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','verified'])->group(function (){
    Route::inertia('/', 'Main')->name('home');
    Route::resource('/user', UserController::class);
});

Route::resources([
    'ddHouse'       => \App\Models\DdHouse::class,
    'md'            => \App\Models\Md::class,
    'zm'            => \App\Models\Zm::class,
    'manager'       => \App\Models\Manager::class,
    'supervisor'    => \App\Models\Supervisor::class,
    'rso'           => \App\Models\Rso::class,
    'retailer'      => \App\Models\Retailer::class,
    'bp'            => \App\Models\Bp::class,
    'account'       => \App\Models\Account::class,
    'dmsOperator'   => \App\Models\DmsOperator::class,
]);



require __DIR__ . '/auth.php';
