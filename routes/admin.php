<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Store\StoreController;
use App\Http\Controllers\Admin\Report\ReportController;
use App\Http\Controllers\Admin\Advertisement\AdvertisementController;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('adminAuth:admin')->group(function (){
    Route::prefix('/store')->group(function(){
        Route::get('/', [StoreController::class, 'index'])->name('store.index');
        Route::get('destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');
        Route::get('accept/{id}', [StoreController::class, 'accept'])->name('store.accept');
        Route::get('search', [StoreController::class, 'search'])->name('store.search');
    });

    Route::prefix('/report')->group(function(){
        Route::get('/', [ReportController::class, 'index'])->name('admin.report.index');
        Route::get('/{report}', [ReportController::class, 'show'])->name('admin.report.show');
    });

    Route::prefix('/advertisement')->group( function() {
        Route::get('/',[AdvertisementController::class, 'index'])->name('admin.advertisement.index');
        Route::get('search', [AdvertisementController::class, 'search'])->name('admin.advertisement.search');
        Route::get('accept/{id}',[AdvertisementController::class, 'accept'])->name('admin.advertisement.accept');
        Route::get('destroy/{id}',[AdvertisementController::class, 'destroy'])->name('admin.advertisement.destroy');
    });
});
