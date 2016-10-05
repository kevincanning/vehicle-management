<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::group(['middleware' => ['web']], function () {
		// Authentication Routes
	Route::get('/login', 'HomeController@index');
	Route::get('/logout', 'HomeController@getLogout');
});

Route::group(['middleware' => ['auth']], function () {
	Route::resource('/vehicles', 'VehicleController');
});


Auth::routes();

