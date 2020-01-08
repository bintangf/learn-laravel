<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Auth::routes(['verify' => true]);

// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin', $data);
	});

});
// Route untuk user yang member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
	Route::get('/', function(){
		return view('home');
	});
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('about', 'PagesController@about');

Route::get('/contact', 'TicketsController@create')->middleware('verified');
Route::post('/contact', 'TicketsController@store');
Route::get('/order', 'TicketsController@index')->middleware('verified');
Route::get('/order/{slug?}', 'TicketsController@show');
Route::get('/order/{slug?}/edit','TicketsController@edit');
Route::post('/order/{slug?}/edit','TicketsController@update');
Route::post('/order/{slug?}/delete','TicketsController@destroy');

Route::post('/comment', 'CommentsController@newComment');
