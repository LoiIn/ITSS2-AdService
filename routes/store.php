<?php

use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('store.login');
Route::middleware('auth:store')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});