<?php

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Store\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advertisement\AdvertisementController;

//Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Web\HomeController'], function() {
//    Route::get('/', 'HomeController@index')->name('web.home');
//};


Route::middleware('auth:store')->group(function (){
    Route::get('/', [HomeController::class, 'getIndex'])->name('web.home');
    Route::get('/store', [StoreController::class, 'index'])->name('web.store');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('web.login');
    Route::post('/login', [LoginController::class, 'signUp'])->name('web.post-login');
    Route::post('/register', [LoginController::class, 'signUp'])->name('web.post-register');
    Route::get('/logout', [LoginController::class, 'logout'])->name('web.logout');
});


