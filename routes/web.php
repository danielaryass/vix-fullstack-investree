<?php

use Illuminate\Support\Facades\Route;
// Controller yang digunakan
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

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
// Route untuk frontsite 
Route::resource('/', BlogController::class);

// Route untuk backsite/dashboard dengan ketentuan user harus login terlebih dahulu
Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);

});
