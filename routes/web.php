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

Route::get('admin/login','LoginController@getLogin');
Route::post('admin/login','LoginController@postLogin');

Route::get('admin','HomeController@getIndex');
Route::get('admin/logout','HomeController@getLogout');

Route::get('admin/product',['as' => 'getProduct', 'uses' => 'ProductController@getProduct']);
Route::post('admin/Add','ProductController@postProductAdd');
Route::post('admin/Update','ProductController@postProductUpdate');
Route::post('admin/Delete','ProductController@postProductDelete');

Route::get('admin/createuser','UserController@getCreateUser');
Route::post('admin/createuser','UserController@CreateUser');

Route::get('admin/listuser','UserController@getListUser');

Route::get('admin/server','ServerController@getServer');

Route::post('admin/insertserver','ServerController@postServerInsert');
Route::post('admin/updateserver','ServerController@postServerUpdate');
Route::post('admin/deleteserver','ServerController@postServerDelete');



