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
Route::put('/update/{team}','HomeController@update');
Route::get('/payment','HomeController@payment');
Route::put('/update/payment/{team}','HomeController@verifyPayment')->name('verify.payment');
Route::post('/message','MessageController@store');
Route::delete('/home/{team}','HomeController@destroy')->name('data.destroy');
Route::get('/message','HomeController@messages');
Route::delete('/message/{message}','HomeController@messageDestroy')->name('message.destroy');
Route::get('/download/leaderCV/{team}','HomeController@downloadLeaderCV')->name('download.leaderCV');
Route::get('/download/leaderProject/{team}','HomeController@downloadLeaderProject')->name('download.leaderProject');
Route::get('/download/member1CV/{team}','HomeController@downloadMember1CV')->name('download.member1CV');
Route::get('/download/member1Project/{team}','HomeController@downloadMember1Project')->name('download.member1Project');
Route::get('/download/member2CV/{team}','HomeController@downloadMember2CV')->name('download.member2CV');
Route::get('/download/member2Project/{team}','HomeController@downloadMember2Project')->name('download.member2Project');

