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

// Admin
Route::get('admin', 'AdminController@Index');

// User
Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));