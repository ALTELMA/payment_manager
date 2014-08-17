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
Route::get('login', function(){
    return View::make('login');
});

Route::post('login', function(){
    return Redirect::intended();
});

// User
Route::group(array('prefix' => 'user', 'before' => 'auth'), function()
{
	// main
	Route::get('/', function(){
		return "USER :D";
	});

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