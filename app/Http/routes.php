<?php
/*
Route::get('/', function()
{
	return View::make('index');

});
*/


Route::get('/', 'logsController@getLogs');


?>