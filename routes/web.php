<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CategoryController@index');

Auth::routes();

Route::get('/successlogin', function(){
   return view('layouts.successlogin'); 
});

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'UserController@index')->middleware('auth');
Route::patch('/profile/{userid}', 'UserController@edit')->middleware('auth');

Route::get('/aboutus', function() {
   return view('aboutus');
});

Route::get('/users', 'AdminController@index')->middleware('isAdmin');

Route::get('/blog', 'ArticleController@getBlog')->middleware('isUser');
Route::get('/blog/add', 'ArticleController@index')->middleware('isUser');
Route::post('/blog/add', 'ArticleController@store')->middleware('isUser');

Route::get('/articles/categories={category}', 'CategoryController@show');

Route::get('/articles/delete/id={articleId}', 'ArticleController@destroys')->middleware('auth');
Route::get('/articles/id={articleId}', 'ArticleController@show');
Route::get('/articles/remove/id={articleId}', 'ArticleController@destroy')->middleware('isUser');

Route::get('/delete/id={userid}', 'UserController@destroy')->middleware('isAdmin');