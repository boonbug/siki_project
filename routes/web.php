<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'loginView')->name('loginView');
    Route::post('checkLogin', 'checkLogin')->name('checkLogin');
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

