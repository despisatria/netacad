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
    return view('layouts.app2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/networking', 'HomeController@networking');
Route::get('/ipaddress', 'HomeController@ipaddress');
Route::get('/routing', 'HomeController@routing');
Route::post('/upload', 'HomeController@upload');
Route::get('/evaluasi', 'HomeController@evaluasi');
