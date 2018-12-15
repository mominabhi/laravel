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


Route::get('/', 'MasterController@home');
Route::get('/form', 'MasterController@form');
Route::resource('/admin', 'MasterController');

Route::group(['prefix' => 'templates', 'as' => 'template.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'MasterController@templating']);
    Route::get('temp', ['as' => 'temp', 'uses' => 'MasterController@hulululu']);
});
Route::group(['prefix' => 'posts', 'as' => 'post.'], function () {
    Route::get('/', ['as' => 'postList', 'uses' => 'postController@posts']);
    Route::get('form', ['as' => 'postFrom', 'uses' => 'postController@form']);
    Route::post('submit', ['as' => 'formSubmit', 'uses' => 'postController@formSubmit']);
    Route::get('edits/{id}', ['as' => 'edit', 'uses' => 'postController@edit']);
    Route::get('deletePost/{id}',['as'=>'delete','uses'=>'postController@delete']);
    Route::post('update', ['as' => 'updatePost', 'uses' => 'postController@update']);
});