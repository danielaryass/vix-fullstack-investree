<?php

use Illuminate\Support\Facades\Route;
// Controller yang digunakan
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

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
Route::get('/', function () {
    return view('pages.home.index');
});

// Route untuk backsite/dashboard dengan ketentuan user harus login terlebih dahulu
Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('post', PostController::class);

});
