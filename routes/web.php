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

Route::get('/draw', 'DrawController@index')->name('draw');

Route::get('/userBoard', function(){
   return view('userBoard');
 });
// Folder Routes
Route::post('/folder/add', 'FolderController@add')->name('home');
Route::post('/folder/update/{id}', 'FolderController@update')->name('home');
Route::get('/folder/delete/{id}', 'FolderController@delete')->name('home');
