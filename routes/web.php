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
Route::get('/note/new', function() {
    return view('note.new');
})->name('note.new');
Route::get('/note/show/{id}', 'NoteController@show')->name('note.show');
Route::post('/note/create', 'NoteController@create')->name('note.create');
Route::put('/note/edit/{id}', 'NoteController@edit')->name('note.edit');

/* メモ系統パス */
Route::get('/post/index/{id}', 'PostController@index')->name('post.index');
Route::get('/post/new', 'PostController@new')->name('post.new');

/* 認証系パス */
Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('signin', 'Auth\RegisterController@showRegistrationForm')->name('signin');
    Route::post('signin', 'Auth\RegisterController@register')->name('signin');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
