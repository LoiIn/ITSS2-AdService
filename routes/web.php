<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/{agent}/sites/{id}/test', [HomeController::class, 'testAds'])->name('test');
Route::get('/guide/store', [HomeController::class, 'guideStore'])->name('guide.store');
Route::get('/guide/user', [HomeController::class, 'guideUser'])->name('guide.user');
Route::get('/site/{id}', [HomeController::class, 'showSite'])->name('site.show');
Route::get('/site/{id}/ads/{ad_id}/report/clicks', [HomeController::class, 'clickAds'])->name('result');
