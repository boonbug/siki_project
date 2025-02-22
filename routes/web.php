<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\VendorShippingContoller;
use App\Http\Controllers\Backend\VendorTransportController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'loginView')->name('loginView');
    Route::post('checkLogin', 'checkLogin')->name('checkLogin');
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

// Vendor Route
Route::controller(VendorProductController::class)->group(function(){
    // Container Details
    Route::get('container_details', 'containerDetailsView')->name('containerDetailsView');
    Route::get('container_details_create', 'containerDetailsCreate')->name('containerDetailsCreate');

    // Conventional Charge
    Route::get('conventional_charges', 'conventionalChargesView')->name('conventChargeView');
    Route::get('conventional_charges_create', 'conventionalChargesCreate')->name('conventionalChargesCreate');

    // Additional Charge
    Route::get('additional_charge', 'additionalChargeView')->name('additionalChargeView');
    Route::get('additional_charge_create', 'additionalChargeCreate')->name('additionalChargeCreate');

    // Operation Charges
    Route::get('operation_charges', 'operationChargeView')->name('OperationChargesView');
    Route::get('operation_charges_create', 'operationChargeCreate')->name('operationChargeCreate');

});

Route::controller(VendorShippingContoller::class)->group(function(){
    // SCO containers
    Route::get('sco_containers', 'SCOContainersView')->name('SCOContainersView');
    Route::get('sco_containers_create', 'SCOContainersCreate')->name('SCOContainersCreate');

    // SCO Conventional cargo
    Route::get('sco_containers_cargo', 'SCOConventionalCargoView')->name('SCOConventionalCargoView');
    Route::get('sco_containers_cargo_create', 'SCOConventionalCargoCreate')->name('SCOConventionalCargoCreate');

    // SCO additional & demmurage
    Route::get('sco_additiobal_demmurage', 'SCOAdditionalDemmurageView')->name('SCOAdditionalDemmurageView');
    Route::get('sco_additiobal_demmurage_create', 'SCOAdditionalDemmurageCreate')->name('SCOAdditionalDemmurageCreate');
});
// resource
Route::resource('vender', VendorController::class);
Route::resource('vender_transporter', VendorTransportController::class);




