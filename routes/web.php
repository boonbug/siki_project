<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\VendorShippingContoller;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\WorkoutRoleController;
use App\Http\Controllers\Backend\VatController;
use App\Http\Controllers\Backend\ContainerController;
use App\Http\Controllers\Backend\AdditionalChargeController;
use App\Http\Controllers\Backend\UnitOfMeasureController;
use App\Http\Controllers\Backend\DocumentController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\CPSCodeController;
use App\Http\Controllers\Backend\AdminProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Auth Route
Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'loginView')->name('loginView');
    Route::post('checkLogin', 'checkLogin')->name('checkLogin');
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

// Vendor Route
Route::middleware(['auth'])->group(function () {

    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    // Master Route
    Route::controller(AdditionalChargeController::class)->group(function(){
        Route::get('firstTierLocalView', 'firstTierLocalView')->name('first_tier_local.index');
        Route::get('firstTierTransitView', 'firstTierTransitView')->name('first_tier_transit.index');
        Route::get('secondTierLocalView', 'secondTierLocalView')->name('second_tier_local.index');
        Route::get('secondTierTransitView', 'secondTierTransitView')->name('second_tier_transit.index');
    });

    Route::controller(DocumentController::class)->group(function(){
        Route::get('localDocumentView', 'localDocumentView')->name('local_document.index');
        Route::get('transitDocumentView', 'transitDocumentView')->name('transit_document.index');
        Route::get('dgCargoDocumentView', 'dgCargoDocumentView')->name('dg_cargo_document.index');
        Route::get('reeferDocumentView', 'reeferDocumentView')->name('reefer_document.index');
        Route::get('directLoadingDocumentView', 'directLoadingDocumentView')->name('direct_loading_document.index');
    });

    Route::resource('department', DepartmentController::class);
    Route::resource('workoutrole', WorkoutRoleController::class);
    Route::resource('vat', VatController::class);
    Route::resource('container', ContainerController::class);
    Route::resource('unit_of_measure', UnitOfMeasureController::class);
    Route::resource('shipping', ShippingController::class);
    Route::resource('country', CountryController::class);
    Route::resource('currency', CurrencyController::class);
    Route::resource('cps_code', CPSCodeController::class);


    // Admin Route
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

    Route::controller(AdminProfileController::class)->group(function(){
        Route::get('admin_profile', 'adminIndex')->name('admin.index');
        Route::get('admin_profile_edit/{id}', 'editAdminProfile')->name('admin.edit');
        Route::put('admin_profile_edit/{id}', 'updateAdminProfile')->name('admin.update');
    });


    Route::resource('vender', VendorController::class);
    Route::resource('vender_transporter', VendorTransportController::class);

    Route::get('/linkstorage', function () {
       dd(Artisan::call('storage:link'));
    });

});

