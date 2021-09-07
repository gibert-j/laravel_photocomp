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

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', 'App\Http\Controllers\HomeController@index') ->name('home');
Route::POST('/', 'App\Http\Controllers\HomeController@index') ->name('home');

Route::get('/about', 'App\Http\Controllers\HomeController@about') ->name('about');
Route::get('/rewards', 'App\Http\Controllers\HomeController@rewards') ->name('rewards');

Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery') ->name('gallery');
Route::get('/Landscapes', 'App\Http\Controllers\HomeController@Landscapes') ->name('Landscapes');
Route::get('/portrait', 'App\Http\Controllers\HomeController@portrait') ->name('portrait');
Route::get('/Sports', 'App\Http\Controllers\HomeController@Sports') ->name('Sports');

Route::GET('/upload', 'App\Http\Controllers\PhotoUploadController@upload') ->name('upload')->middleware('auth');
Route::POST('/upload', 'App\Http\Controllers\PhotoUploadController@store') ->name('upload');
Route::GET('/upload/thanks-message', 'App\Http\Controllers\PhotoUploadController@thanksmessage') ->name('thanksmessage');
