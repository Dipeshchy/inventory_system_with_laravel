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

Route::get('/admin','AdminController@admin_index');

Route::get('/clientmanager','AdminController@clientManager');

Route::get('/add_client','AdminController@addclients');

Route::get('/storeclients','AdminController@storeclients');

Route::get('/chequemanager','AdminController@chequeManager');

Route::get('/add_cheques','AdminController@addCheques');

Route::get('/storecheques','AdminController@storecheques');
