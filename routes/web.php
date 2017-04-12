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

Route::get('/', 'AdminController@connect');

Route::post('/connect','AdminController@index');
Route::post('/add','AdminController@add');
Route::get('/delete_dev','AdminController@delete');
Route::get('/update_dev','AdminController@update');
Route::get('/disconnect','AdminController@connect');
Route::get('/add_dev','AdminController@addForm');
Route::get('/delete_ajax','AdminController@delNow');
Route::post('/formUpdate','AdminController@updateDate');