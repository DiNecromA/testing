<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('test', function()
	{
	return 'fdfdf';
	});
Route::post('test', function()
	{
	return 'fuck';
	});
Route::match(['get','post','put'],'foo', function(){
	return 'gi';
});
Route::any('bar', function()
	{
	return url('bar');
	});*/
/*
get('user/{name}.{age}', function($name, $age)
	{
		return "Привет {$age}тний {$name}";
	})->where(['name' => '[а-яА-ЯёЁ]+', 'age' => '[0-9]{1,2}']);*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
	get('{name}', 'testController@show');
});