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
use App\Task;

Route::get('/home', function () {
    return view('home');
});
// 登録画面
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
// 登録処理
Route::post('auth/register', 'Auth\RegisterController@register');
// ユーザー認証画面
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
// ユーザー認証
Route::post('/auth/login', 'Auth\LoginController@login');
// ログアウト
Route::get('/auth/logout', 'Auth\LoginController@logout');
