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

Route::get('/', function()
{
	return 'Hello!';
});
Route::get('users', function()
{
    return View::make('users');
});
Route::get('users/profile', 'UserController@profile');/*function()
{
    //return View::make('userprofile');
	
});*/
Route::post('users/login', 'UserController@actionLogin');
Route::post('events/add', 'EventController@actionAdd');
//Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('events', 'EventController@getJson');
});