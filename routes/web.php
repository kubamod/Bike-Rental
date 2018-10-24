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

Route::resource('/', 'PagesController');

Route::get('bike/{id?}', 'BikeController@show');

//Route::post('bike/1', 'RentBikeController@store');

Route::redirect('/bike', '/');
//Route::

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('rented', 'RentBikeController@index');

Route::resource('bikes', 'BikeController');