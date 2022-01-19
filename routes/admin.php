<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Site\SiteController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Store\StoreController;
use App\Http\Controllers\Admin\Report\ReportController;
use App\Http\Controllers\Admin\Advertisement\AdvertisementController;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::middleware('adminAuth:admin')->group(function (){
    Route::prefix('/stores')->group(function(){
        Route::get('/', [StoreController::class, 'index'])->name('store.index');
        Route::get('destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');
        Route::get('accept/{id}', [StoreController::class, 'accept'])->name('store.accept');
        Route::get('search', [StoreController::class, 'search'])->name('store.search');
    });
    Route::resource('/site', SiteController::class,  [
        'except' => [ 'show' ]
    ]);
    Route::prefix('/reports')->group(function(){
        Route::get('/', [ReportController::class, 'index'])->name('admin.report.index');
        Route::get('/{report}/detail', [ReportController::class, 'show'])->name('admin.report.show');
        Route::get('/search', [ReportController::class, 'search'])->name('admin.report.search');
    });

    Route::prefix('/advertisements')->group( function() {
        Route::get('/',[AdvertisementController::class, 'index'])->name('admin.advertisement.index');
        Route::get('search', [AdvertisementController::class, 'search'])->name('admin.advertisement.search');
        Route::post('accept/{id}',[AdvertisementController::class, 'accept'])->name('admin.advertisement.accept');
        Route::get('accept/{id}/add-site', [AdvertisementController::class, 'sites'])->name('admin.advertisement.accept.sites');
        Route::get('accept/{id}/add-site/search', [AdvertisementController::class, 'searchSite'])->name('admin.advertisement.accept.sites.search');
        Route::get('destroy/{id}',[AdvertisementController::class, 'destroy'])->name('admin.advertisement.destroy');
    });
});
