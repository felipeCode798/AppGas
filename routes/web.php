<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\Fuelcontroller;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\ServiceHistoryController;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('servicesHistory', ServiceHistoryController::class);
Route::resource('color', ColorController::class);
Route::resource('fuel', Fuelcontroller::class);
Route::resource('history', HistoryController::class);
Route::resource('mark', MarkController::class);
Route::resource('services', ServiceController::class);
Route::resource('station', StationController::class);
Route::resource('vehicle', VehicleController::class);
