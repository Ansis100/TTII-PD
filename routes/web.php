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

Auth::routes();

Route::get('/user', 'UserController@profile')->name('user');
Route::get('/user/{id}', 'UserController@register')->name('register-profile');
