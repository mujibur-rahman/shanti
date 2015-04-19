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

//Route::get('/', 'WelcomeController@index');
// Route::get('/', function(){
// 	return View::make('home');
// });
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@dashboard');
Route::get('dashboard', 'HomeController@dashboard');
//Route::get('articles/more/{count}', 'HomeController@moreArticles');
Route::get('articles/more', 'HomeController@moreArticles');
Route::get('articles/category/more/{id}', 'HomeController@moreCategoryArticles');
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
Route::resource('tags', 'TagsController');
Route::get('category/article/{id}', 'HomeController@articleCategory');
Route::get('details/article/{id}', 'HomeController@articleDetails');
Route::get('details/event/{id}', 'HomeController@eventDetails');
Route::get('list/fevents', 'HomeController@feventsLists');
Route::get('list/reviews', 'HomeController@reviewsList');
//Route::get('user/sort/{role}', 'UserController@indexSort');
//Route::post('list/reviews1', 'HomeController@reviewsSearch');
//Route::post('list/reviews1', array('uses'=>'App\Http\Controllers\HomeController@reviewsSearch'));

Route::get('categorysearch', 'HomeController@wildcardSearch');

Route::get('reviewsearch', array(
  'uses' => 'HomeController@reviewsSearch',
  'as' => 'front.all-reviews'
));

Route::post('reviewsearch', array(
  'uses' => 'HomeController@reviewsSearch',
  'as' => 'front.all-reviews'
));



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
