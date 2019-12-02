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

Route::get('/', "BookController@index");
Route::get('/create', "BookController@create");
Route::post('/insert', "BookController@add");
Route::get('/edit/{id}', "BookController@edit");
Route::post('/update/{id}', "BookController@update");
Route::get('/detail/{id}', "BookController@detail");
Route::get('/delete/{id}', "BookController@delete");

Route::group(['middleware' => ['web']], function () {
   Route::resource('ajax', 'AjaxController');
   Route::POST('addPost', 'AjaxController@addPost');
   Route::POST('editPost', 'AjaxController@editPost');
   Route::POST('deletePost', 'AjaxController@deletePost');
   
});
