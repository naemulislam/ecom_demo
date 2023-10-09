<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::get('/login/store','loginStore')->name('login.store');
    Route::get('/logout','logout')->name('logout');
});
Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index')->name('home');
});
Route::controller(BackendController::class)->group(function(){});
