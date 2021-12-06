<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/test', [HomeController::class, 'testAds'])->name('test');
Route::get('/result', [HomeController::class, 'clickAds'])->name('result');
