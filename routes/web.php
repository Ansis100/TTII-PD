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

Route::get('/', 'ApartmentController@returnAllApartments')->name('home');

Route::get('/apartment/new', 'ApartmentController@new');

Route::post('/apartment/new', 'ApartmentController@store');

Route::get('/apartment/{id}', 'ApartmentController@apartment');

Route::get('/user/{id}', 'UserController@profile');

Route::post('/user', 'UserController@update')->name('update-user');

Auth::routes();
