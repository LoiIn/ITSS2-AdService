<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advertisement\AdvertisementConteoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('advertisement')->group(function(){
    Route::get('/', [AdvertisementConteoller::class, 'index'])->name('advertisement.index');
    Route::get('destroy/{id}', [AdvertisementConteoller::class, 'destroy'])->name('advertisement.destroy');
   
});


