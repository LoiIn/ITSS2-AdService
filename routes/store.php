<?php

use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('auth:store')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});
Route::get('/signup', [LoginController::class, 'getSignUp']);
Route::post('/signup', [LoginController::class, 'signUp'])->name('signup');

