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

Route::get('/','PageController@profile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','MemberController@create');
Route::post('/create','MemberController@store');
Route::get('/member','MemberController@index');
