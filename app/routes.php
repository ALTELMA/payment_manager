<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Login
Route::get('/', function(){
	return View::make('users.login');
});

Route::post('user/login', array('uses' => 'UserController@doLogin'));

//=====================================================================
// USERS
//=====================================================================

// Register
Route::get('user/register', function(){
	return View::make('users.register');
});

Route::post('user/register', array('uses' => 'UserController@register'));