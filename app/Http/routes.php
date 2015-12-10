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
// Index Project
Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@create');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', [
	'middleware' => 'auth',
	'uses' => 'Auth\AuthController@postRegister'
]);

Route::group(['middleware' => 'auth'], function () {
    // Kalo pake ini harus pake model show dan input datanya (OOP)
    Route::group(['middleware' => 'role:admin'], function () {
		Route::resource('admin/dashboard', 'AdminController');
		Route::resource('admin/status', 'StatusController');
		Route::resource('admin/orders', 'OrderController');
		Route::resource('admin/charts', 'ChartController');
		Route::resource('admin/products', 'ProductController');
	});
}); 