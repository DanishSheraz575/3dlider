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
        Route::post('personal_form','personal_form')->name('personal_form');
        Route::post('foreign_form','foreign_form')->name('foreign_form');
        Route::post('labor_form','labor_form')->name('labor_form');

    });

});
