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

Route::get('/home', 'HomeController@index2')->name('home');
Route::get('/home/{id}', 'HomeController@index')->name('home');

/*Route::get('/draw', 'DrawController@index')->name('draw');
Route::post('/draw', 'DrawController@saveImage')->name('draw');*/

Route::get('/userBoard', 'UserBoardController@index')->name('draw');

// Folder Routes
Route::post('/folder/add/{id}', 'FolderController@add')->name('home');
Route::post('/folder/update/{id}', 'FolderController@update')->name('home');
Route::get('/folder/delete/{id}/{userId}', 'FolderController@delete')->name('home');
