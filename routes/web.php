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

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');

Route::get('/tasks/{task}', 'TaskController@show');
Route::post('/tasks/{task}', 'TaskController@destroy');

Route::get('/tasks/edit/{task}', 'TaskController@showUpdateTitle');
Route::post('/tasks/edit/{task}', 'TaskController@UpdateTitle');
Route::get('/tasks/complete/{task}', 'TaskController@completeTask');



















