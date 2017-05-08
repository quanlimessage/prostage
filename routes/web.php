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

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('','HomeController@getIndex');
Route::get('logout','HomeController@getLogout');

Route::get('product',['as' => 'getProduct', 'uses' => 'ProductController@getProduct']);
Route::post('Add','ProductController@postProductAdd');
Route::post('Update','ProductController@postProductUpdate');
Route::post('Delete','ProductController@postProductDelete');

Route::get('createuser','UserController@getCreateUser');
Route::post('createuser','UserController@CreateUser');

Route::get('listuser','UserController@getListUser');