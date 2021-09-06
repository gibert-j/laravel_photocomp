<?php

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
Route::get('/', 'App\Http\Controllers\HomeController@index') ->name('home');
Route::POST('/', 'App\Http\Controllers\HomeController@index') ->name('home');
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('gallery', 'App\Http\Controllers\HomeController@gallery') ->name('gallery');
Route::get('rewards', 'App\Http\Controllers\HomeController@rewards') ->name('rewards');
Route::get('Landscapes', 'App\Http\Controllers\HomeController@Landscapes') ->name('Landscapes');
Route::get('portrait', 'App\Http\Controllers\HomeController@portrait') ->name('portrait');
Route::get('Sports', 'App\Http\Controllers\HomeController@Sports') ->name('Sports');

Route::get('about', 'App\Http\Controllers\HomeController@about') ->name('about');

