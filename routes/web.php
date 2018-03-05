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

Auth::routes();

// Route::get('/admin', function() {
// 	return redirect('/admin/dashboard');
// });

// Route::group([
// 	'namespace' => 'Admin', 
// 	'prefix' => 'admin'
// 	], 
// 	function() {
// 		Route::get('/dashboard','AdminController@index');
// 		Route::get('/users','UsersController@index');
// 		Route::get('/pages','PagesController@index');
// 	}
// );

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
}