<?php

use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Report\ReportController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('auth:store')->group(function (){
    Route::get('/', [StoreController::class, 'index'])->name('dashboard');

    Route::prefix('/product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
    });

    Route::prefix('/report')->group(function(){
        Route::get('/', [ReportController::class, 'index'])->name('report.index');
        Route::get('/{report}', [ReportController::class, 'show'])->name('report.show');
    });
});
Route::get('/signup', [LoginController::class, 'getSignUp']);
Route::post('/signup', [LoginController::class, 'signUp'])->name('signup');

