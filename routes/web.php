<?php

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

Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@login')->middleware('guest')->name('login');
    Route::get('/validate', 'LoginController@validateLogin')->middleware('guest');
    Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');
});

Route::get('/dpp', 'Controller@privacyAcceptance')->name('dpp');
Route::get('/{any?}', 'Controller@index')->where('any', '.*')->name('splash');