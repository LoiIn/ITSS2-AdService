<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/{agent}/sites/{id}/test', [HomeController::class, 'testAds'])->name('test');
Route::get('/{agent}/sites/{id}/result', [HomeController::class, 'clickAds'])->name('result');
