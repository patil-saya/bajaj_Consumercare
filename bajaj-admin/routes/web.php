<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Partners\LoginController;
use App\Http\Controllers\Partners\SpinWheelController;
use App\Http\Controllers\website;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/spinwheel/login', [LoginController::class, 'showLoginForm'])->name('spinwheel.login');
Route::post('/spinwheel/checklogin',[LoginController::class,'checklogin'])->name('spinwheel.checklogin');

Route::group(['middleware' => 'partner'], function () {

    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/home',[LoginController::class,'successlogin']);
    Route::get('/logout',[LoginController::class,'logout']);

    Route::get('home', [SpinWheelController::class, 'index']);

    Route::post('change_status', [SpinWheelController::class, 'change_status']);
    Route::post('all_records', [SpinWheelController::class, 'spinwheel_data']);

    Route::post('discharge', [SpinWheelController::class, 'discharge_patient']);
    Route::post('generate_disc', [SpinWheelController::class, 'generate_disc']);

    Route::get('home', [SpinWheelController::class, 'index']);
});
