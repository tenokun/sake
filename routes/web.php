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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'PostController@index')->middleware('auth');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/bookmark', 'PostController@bookmark');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    Route::delete('/posts/{post}', 'PostController@delete');
    Route::get('/categories/{category}', 'CategoryController@index');

    Route::post('/posts', 'PostController@store');

    Route::post('/posts/{post}/favorites', 'FavoriteController@store')->name('favorites');
    Route::post('/posts/{post}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
