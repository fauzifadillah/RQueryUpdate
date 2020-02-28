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

Route::get('/api/v1', 'DataController@index');
Route::get('/api/json', 'DataController@json')->name('json');
Route::get('/api/load', 'DataController@load')->name('load');
