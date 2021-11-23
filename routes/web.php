<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advertisement\AdvertisementController;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

Route::prefix('advertisement')->group(function(){
    Route::get('/', [AdvertisementController::class, 'index'])->name('advertisement.index');
    Route::get('destroy/{id}', [AdvertisementController::class, 'destroy'])->name('advertisement.destroy');
   
});


