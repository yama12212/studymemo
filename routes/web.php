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

/* ルートパス */
Route::get('/', 'NoteController@index')->name('note.index');

/* ノート系統パス */
Route::group(['prefix' => 'note', 'as' => 'note.'], function() {
    Route::get('/new', 'NoteController@new')->name('new');
    Route::get('/show/{id}', 'NoteController@show')->name('show');
    Route::post('/create', 'NoteController@create')->name('create');
    Route::put('/edit/{id}', 'NoteController@edit')->name('edit');
    Route::delete('/delete/{id}', 'NoteController@delete')->name('delete');
});

/* メモ系統パス */
Route::group(['prefix' => 'post', 'as' => 'post.'], function() {
    Route::get('/index/{id}', 'PostController@index')->name('index');
    Route::get('/view/{id}', 'PostController@view')->name('view');
    Route::get('/new', 'PostController@new')->name('new');
    Route::get('/show/{id}', 'PostController@show')->name('show');
    Route::post('/create', 'PostController@create')->name('create');
    Route::put('/edit/{id}', 'PostController@edit')->name('edit');
    Route::delete('/delete/{id}', 'PostController@delete')->name('delete');
});

/* 認証系パス */
Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('signin', 'Auth\RegisterController@showRegistrationForm')->name('signin');
    Route::post('signin', 'Auth\RegisterController@register')->name('signin');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
