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

// Error 404
App::missing(function($exception)
{
    return Response::view('error/404', array(), 404);
});

// login
Route::get('login', array('uses' => 'UserController@showLogin'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('uses' => 'UserController@doLogout'));

// User
Route::group(array('prefix' => 'user', 'before' => 'auth'), function()
{
	// main
	Route::get('/', array('uses' => 'UserController@index'));

	// add
    Route::get('add', function()
    {
        return "USER ADD!!";
    });

    // edit
    Route::get('edit/{id?}', function($id)
    {
        return "USER EDIT : " . $id;
    });

    // delete
    Route::get('delete/{id?}', function($id)
    {
        return "USER DELETE : " . $id;
    });

	// View
    Route::get('view/{id?}', function($id)
    {
        return "USER VIEW : " . $id;
    });

});