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
Route::resource('/post','formController');
Route::resource('/tag','TagController');
Route::get('/delete/{id}','formController@delete');
Route::get('/login','AdminController@login');
Route::post('/check','AdminController@check');
Route::get('/admin_list','AdminController@admin_list');
Route::get('/logout','AdminController@logout');