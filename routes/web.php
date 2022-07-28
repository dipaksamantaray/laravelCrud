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

Route::get('create','CrudController@create');
Route::get('listing','CrudController@listing');
Route::get('edit/{id}','CrudController@edit');
Route::post('save','CrudController@save');
Route::post('update/{id}','CrudController@update');

Route::get('delete/{id}','CrudController@delete');