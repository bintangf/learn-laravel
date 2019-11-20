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
    return view('home');
});

<<<<<<< HEAD
Route::get('whois', function () {
=======
Route::get('bombom', function () {
>>>>>>> 3d2d450a3ba192701a10c2af7857f6fccb5a99d8
    return view('bintang');
});

Route::get('master', 'PagesController@master');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
