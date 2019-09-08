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

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/users','UsersController@index');

Route::get('/users/create','UsersController@create');
Route::post('/users/create','UsersController@store');

Route::get('/users/destroy/{id}','UsersController@destroy');

Route::get('/users/edit/{id}','UsersController@edit');
Route::post('/users/edit/{id}','UsersController@update');