<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/route-cache', function() {
    Cache::flush();
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Route::clearResolvedInstances();
    return 'Routes cache cleared';
});

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::get('/login', 'App\Http\Controllers\UserController@index')->name('login');
Route::post('/do_login', 'App\Http\Controllers\UserController@login')->name('do_login');

Route::middleware(\App\Http\Middleware\EnsureLogin::class)->group(function () {
    Route::get('', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

//    Companies
    Route::controller(App\Http\Controllers\CompanyController::class)->group(function () {
        Route::get('/company', 'index')->name('company');
        Route::post('/company/save', 'save')->name('save_company');
    });

    //    Staff
    Route::controller(App\Http\Controllers\StaffController::class)->group(function () {
        Route::get('/staff', 'index')->name('staff');
        Route::get('staff_form','staff_form')->name('staff_form');
        Route::get('staff_form/{id}','staff_form')->name('staff_form_edit');
        Route::post('personal_form','personal_form')->name('personal_form');
        Route::post('foreign_form','foreign_form')->name('foreign_form');
        Route::post('labor_form','labor_form')->name('labor_form');

    });

    //   Vehicles::
    Route::controller(App\Http\Controllers\VehiclesController::class)->group(function () {
        Route::get('/vehicles', 'index')->name('vehicles');
        Route::get('/vehicle_form', 'vehicle_form')->name('vehicle_form');
        Route::post('vehicle_features','vehicle_features')->name('vehicle_features');
        Route::post('technical_inspection','technical_inspection')->name('technical_inspection');
    });

    //   Contracts
    Route::controller(App\Http\Controllers\ContractorsController::class)->group(function () {
        Route::get('/contractor', 'index')->name('contractor');
        Route::get('/contractor_form', 'contractor_form')->name('contractor_form');
        Route::get('/contractor_form/{id}', 'contractor_form')->name('contractor_form_edit');
        Route::post('/save_contract','save_contract')->name('save_contract');
        Route::post('/delete_contract','delete_contract')->name('delete_contract');
    });

});
