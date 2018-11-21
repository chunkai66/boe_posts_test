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
//Auth::routes();

#登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
#登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

#註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');

#忘記密碼
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');




//首頁
Route::get('/', function () {
    return view('index');
})->name('index');

//顯示公告
Route::get('posts', 'PostsController@index')->name('posts.index');

//讀取公告
Route::get('posts/{post}', 'PostsController@show')->where('post', '[0-9]+')->name('posts.show');

//利用adminMiddleware中介
Route::group(['middleware' => 'admin'], function () {
    //建立公告的頁面
    Route::get('posts/create', 'PostsController@create')->name('posts.create');
    //在建立公告的頁面送出公告
    Route::post('posts', 'PostsController@store')->name('posts.store');
    //顯示要修改的指定公告頁面
    Route::get('posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
    //送出要修改的指定公告內容
    Route::patch('posts/{post}', 'PostsController@update')->name('posts.update');
    //刪除指定的公告
    Route::delete('posts/{post}', 'PostsController@destroy')->name('posts.destroy');
});



//Route::get('/home', 'HomeController@index')->name('home');

//站內公告利用auth中介認証
Route::group(['middleware' => 'auth'], function () {
    Route::get('inside', function () {
        return view('inside');
    })->name('inside');
});



