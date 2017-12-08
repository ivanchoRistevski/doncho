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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories/index', 'CategoriesController@index');

Route::get('/categories/create','CategoriesController@create');

Route::post('/categories','CategoriesController@store');


Route::get('/posts/create', 'PostsController@create');

Route::post('/posts','PostsController@upload');

Route::get('/','PostsController@index');

Route::get('/{category}', 'CategoriesController@show');

Route::get('/{category}/{post}', 'PostsController@show');
