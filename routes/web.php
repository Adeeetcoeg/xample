<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        "title" => "welcome"
    ]);
});
Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "checkout"
    ]);
});


Auth::routes();

Route::group(
    ['prefix' => 'admin','middleware'=>['auth','role:admin']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    });

Route::group(
    ['prefix' => 'penjual','middleware'=>['auth','role:penjual']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    });

    Route::group(
    ['prefix' => 'user','middleware'=>['auth','role:user']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
