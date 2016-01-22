<?php
/*
Route::get('/', function()
{
	return View::make('index');

});
*/


Route::get('/', 'logsController@getLogs');



/* User Authentication */


Route::get('users/login', 'Auth\AuthController@getLogin');
Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

/* Authenticated users */

Route::group(['middleware' => 'auth'], function()
{
    Route::get('users/dashboard', array('as'=>'dashboard', function()
	{
	return View('users.dashboard');
	}));
});




?>