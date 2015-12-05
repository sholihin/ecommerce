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

Route::get('admin/dashboard', [
    'middleware' => 'auth',
    'uses' => 'AdminController@index'
]);

Route::get('admin/reviews', [
    'middleware' => 'auth',
    'uses' => 'ReviewController@index'
]);

Route::get('admin/orders', [
    'middleware' => 'auth',
    'uses' => 'OrderController@index'
]);

Route::get('admin/charts', [
    'middleware' => 'auth',
    'uses' => 'ChartController@index'
]);