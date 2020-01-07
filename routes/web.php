<?php

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('about', 'PagesController@about');

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/order', 'TicketsController@index');
Route::get('/order/{slug?}', 'TicketsController@show');
Route::get('/order/{slug?}/edit','TicketsController@edit');
Route::post('/order/{slug?}/edit','TicketsController@update');
Route::post('/order/{slug?}/delete','TicketsController@destroy');

Route::post('/comment', 'CommentsController@newComment');
