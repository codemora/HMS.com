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

Route::get('/','PagesController@index');

Route::resource('hostels','HostelController');

Route::get('application/create','ApplicationController@create');
Route::post('application/create','ApplicationController@show');
