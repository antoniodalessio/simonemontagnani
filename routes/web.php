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

if ($_ENV['LOCALIZATION'] == "true") {
	Route::get('/', [
		'as' => 'page', 
		'uses' => 'PageController@indexLocal',
	]);
}else{
	Route::get('/', [
		'as' => 'page', 
		'uses' => 'PageController@index',
	]);
}

//Auth::routes();


if ($_ENV['LOCALIZATION'] == "true") {
	Route::get('{lang}/{pageName}', [ 
		'as' => 'page', 
		'uses' => 'PageController@indexLocal'
	]);
}else{
	Route::get('{pageName}', [ 
		'as' => 'page', 
		'uses' => 'PageController@index'
	]);

	Route::get('progetti/{pageName}', [ 
		'as' => 'project', 
		'uses' => 'ProjectController@index'
	]);
}