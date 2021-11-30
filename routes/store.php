<?php

use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\Product\ProductController;
use App\Http\Controllers\Store\Report\ReportController;
use App\Http\Controllers\Store\Advertisement\AdvertisementController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('store.logout');
Route::middleware('auth:store')->group(function (){
    Route::get('/', [StoreController::class, 'index'])->name('dashboard');

    Route::prefix('/products')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/update', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/{id}/update', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/{id}/delete', [ProductController::class, 'remove'])->name('product.remove');
    });

    Route::prefix('/advertisements')->group(function(){
        Route::get('/', [AdvertisementController::class, 'index'])->name('advertisement.index');
        Route::get('/create', [AdvertisementController::class, 'create'])->name('advertisement.create');
        Route::post('/create', [AdvertisementController::class, 'store'])->name('advertisement.store');
        Route::get('/{id}/update', [AdvertisementController::class, 'edit'])->name('advertisement.edit');
        Route::post('/{id}/update', [AdvertisementController::class, 'update'])->name('advertisement.update');
        Route::delete('/{id}/delete', [AdvertisementController::class, 'remove'])->name('advertisement.remove');
    });

    Route::prefix('/reports')->group(function(){
        Route::get('/', [ReportController::class, 'index'])->name('report.index');
        Route::get('/{report}', [ReportController::class, 'show'])->name('report.show');
    });
});
Route::get('/signup', [LoginController::class, 'getSignUp'])->name('store.register');
Route::post('/signup', [LoginController::class, 'signUp'])->name('store.signup');

