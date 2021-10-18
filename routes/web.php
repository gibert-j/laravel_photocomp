<?php
namespace App\Http\Controllers;
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

Route::get('/', 'App\Http\Controllers\HomeController@index') ->name('home');
Route::POST('/', 'App\Http\Controllers\HomeController@index') ->name('home');

Route::resource('contacts', ContactController::class);

Route::get('/about', 'App\Http\Controllers\HomeController@about') ->name('about');
Route::get('/rewards', 'App\Http\Controllers\HomeController@rewards') ->name('rewards');

Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery') ->name('gallery');
Route::get('/whatwedo', 'App\Http\Controllers\HomeController@whatweDo') ->name('whatwedo');

Route::get('/policy', 'App\Http\Controllers\HomeController@policy') ->name('policy');

Route::resource('competitions.entries', EntryController::class)->middleware('auth');



Route::resource('competitions', CompetitionController::class)->except(['show'])->middleware(['auth', 'verified']);
Route::resource('competitions', CompetitionController::class)->only(['show']);
