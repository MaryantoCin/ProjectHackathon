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

Route::get('/','PageController@profile')->name('landingpage');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','TeamController@create',function(){
    //
})->middleware('auth');
Route::post('/home','TeamController@store');
Route::get('/edit','HomeController@edit',function(){
    //
})->middleware('auth');
Route::put('/update','HomeController@update');
Route::get('/payment','HomeController@payment');
// Route::delete('/home/{team}','TeamController@destroy');
