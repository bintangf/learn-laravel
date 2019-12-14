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
Route::get('bintang', function () {
    return view('bintang');
});

Route::get('/', function () {
    return view('home');
});

Route::get('master', 'PagesController@master');
Route::get('about', 'PagesController@about');

Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

Route::get('sendemail', function () {
  $data = array(
    'name' => "Learning Laravel",
  );

  Mail::send('emails.welcome', $data, function ($message) {
    $message->from('dexitdmc@gmail.com', 'Siapa Hayo?');
    $message->to('dexit@yopmail.com')->subject('Tes Kirim Emails!');
  });

  return "Your email has been sent successfully";
});

Route::post('/comment', 'CommentsController@newComment');
