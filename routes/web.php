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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/apartment/new', 'ApartmentController@new');

    Route::post('/apartment/new', 'ApartmentController@store');

    Route::post('/apartment/{id}', 'ApartmentController@newReview');

    Route::get('/apartment/{id}', 'ApartmentController@apartment');

    Route::get('/user/{id}', 'UserController@profile');

    Route::get('/apartment/{id}/delete/{id2}', 'ReviewController@destroy');

    Route::get('/apartment/{id}/update/{id2}', 'ReviewController@change');

    Route::post('/apartment/{id}/update/{id2}', 'ReviewController@update');
});

Auth::routes();
