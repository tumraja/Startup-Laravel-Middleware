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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/task', 'TaskController');
Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/admin/users', 'AdminController@listUsers')->name('users');
Route::get('/admin/account', 'AdminController@account')->name('account');
Route::get('/admin/follow-me', 'AdminController@show')->name('follow-me');