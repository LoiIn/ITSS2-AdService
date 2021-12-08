<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/sites/{id}', [HomeController::class, 'testAds'])->name('test');
Route::get('/result/{id}', [HomeController::class, 'clickAds'])->name('result');
