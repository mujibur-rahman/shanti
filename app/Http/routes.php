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

Route::get('/', 'WelcomeController@index');
// Route::get('/', function(){
// 	return View::make('home');
// });
Route::get('home', 'HomeController@index');
Route::get('dashboard', 'HomeController@dashboard');


//Route::get('user/showbylimit', 'UserController@showbylimit');
Route::post('user/showlimit', 'UserController@showlimit');
//Route::get('user/add', 'UserController@create', ['middleware' => 'user']);

//Route::resource('users', 'UsersController');
Route::resource('user', 'UserController');
Route::resource('ads', 'AdsController');
Route::resource('category', 'ArticleCategoryController');
Route::get('articles/getlists/{id}/{name}', 'ArticlesController@getLists');
Route::resource('articles', 'ArticlesController');
Route::resource('events', 'EventsController');

//Route::get('user/sort/{role}', 'UserController@indexSort');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
