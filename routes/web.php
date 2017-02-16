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

Route::get('/','SweetController@getIndex');

Route::post('/sell/{id}','SweetController@sellSweet');
Route::post('/refill/{id}','SweetController@buySweet');
Route::post('/add_sweet','SweetController@addSweet');

Route::post('/delete/{id}','SweetController@deleteSweet');
