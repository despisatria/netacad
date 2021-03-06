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

Route::get('/', 'Auth\LoginController@viewLogin');

Auth::routes();

Route::get('/tentang', function() {
    return view('about');
});

Route::get('/home', 'HomeController@index');
Route::get('/networking', 'HomeController@networking');
Route::get('/ipaddress', 'HomeController@ipaddress');
Route::get('/routing', 'HomeController@routing');
Route::post('/upload', 'HomeController@upload');
Route::get('/evaluasi', 'HomeController@evaluasi');
Route::get('/evaluasiIpaddress', 'HomeController@evaluasiIpaddress');
Route::post('/evaluasiIpaddress', 'HomeController@evaluasiIpaddressPost');
Route::get('/result-ipaddress', 'HomeController@resultIpaddress');
