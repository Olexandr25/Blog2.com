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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/single/{id}', 'BlogController@show')->name('blog.single');
Route::get('admin/blog','PostController@index')->name('admin');

Route::get('admin/create/post','PostController@create')->name('post.create');
Route::post('admin/store/post','PostController@store')->name('post.store');

Route::get('admin/show/post/{id}','PostController@show')->name('post.show');

Route::get('admin/edit/post/{id}','PostController@edit')->name('post.edit');
Route::post('admin/update/post/{id}','PostController@update')->name('post.update');

Route::post('admin/delete/post/{id}','PostController@destroy')->name('post.destroy');
