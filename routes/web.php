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
Route::group(['prefix' => '/api/auth', ['middleware' => 'throttle:20,5']], function () {
	Route::post('/register', 'api\Auth\RegisterController@register');
	Route::post('/login', 'api\Auth\LoginController@login');
});
