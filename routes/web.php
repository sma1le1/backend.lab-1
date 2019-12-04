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

Route::get('/', "ArticlesController@publicIndex");


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('customers', 'CustomerController');

Route::resource('articles', 'ArticlesController');

Route::resource('categories', 'CategoriesController');

Route::resource('comments', 'CommentsController');

Route::resource('users', 'UsersController');
