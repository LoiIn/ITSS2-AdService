<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Store\StoreController;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('adminAuth:admin')->group(function (){
    Route::prefix('/store')->group(function(){
        Route::get('/', [StoreController::class, 'index'])->name('store.index');
        Route::get('destroy/{id}', [StoreController::class, 'destroy'])->name('store.destroy');
        Route::get('accept/{id}', [StoreController::class, 'accept'])->name('store.accept');
        Route::get('search', [StoreController::class, 'search'])->name('store.search');
    });
});
