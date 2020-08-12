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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/hello', function () {
    return view('hello');
})->name('hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/scores', 'ScoreController@index')->name('scores');

Route::get('/ranking', 'ScoreController@ranking')->name('ranking');

Route::get('/user_scores', 'ScoreController@scores')->name('user_scores');

Route::get('/game', 'ScoreController@game')->name('game');

Route::post('/scores', 'ScoreController@store')->name('store');

