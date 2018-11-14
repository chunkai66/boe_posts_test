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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//首頁
Route::get('index', function () {
    return view('index');
})->name('index');

//顯示公告
Route::get('posts', 'PostsController@index')->name('posts.index');

//建立公告的頁面
Route::get('posts/create', 'PostsController@create')->name('posts.create');

//在建立公告的頁面送出公告
Route::post('posts', 'PostsController@store')->name('posts.store');

//讀取公告
Route::get('posts/{id}', 'PostsController@show')->name('posts.show');

//顯示要修改的指定公告頁面
Route::get('posts/{id}/edit', 'PostsController@edit')->name('posts.edit');

//送出要修改的指定公告內容
Route::patch('posts/{id}', 'PostsController@update')->name('posts.update');

//刪除指定的公告
Route::delete('posts/{id}', 'PostsController@destroy')->name('posts.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
