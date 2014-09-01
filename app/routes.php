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

Route::post('user/login', array('uses' => 'UserController@doLogin')); // Logoin
Route::get('user/logout', array('uses' => 'UserController@doLogout')); // Logout

//=====================================================================
// USERS
//=====================================================================

Route::get('user/register', array('uses' => 'UserController@create'));

Route::group(array('before'=>'auth'), function() {   
	Route::resource('user', 'UserController');
});

//=====================================================================
// INCOME
//=====================================================================
//
Route::group(array('before'=>'auth'), function() {   
	Route::resource('income', 'IncomeController');
});

//=====================================================================
// Expense
//=====================================================================

//Route::resource('expense', 'ExpenseController');

Route::group(array('before'=>'auth'), function() {   
    Route::resource('expense', 'ExpenseController');
});

//=====================================================================
// Setting
//=====================================================================
Route::group(array('before'=>'auth'), function() {   
	Route::resource('setting', 'ExpenseController');
});

//=====================================================================
// Error
//=====================================================================

App::missing(function($exception)
{
	return Response::view('error.404', array(), 404);
});