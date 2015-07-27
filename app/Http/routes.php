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

// Welcome new users...
Route::get('/', 'Auth\AuthController@welcome');

// Dashboard for logged in users...
Route::get('/dashboard', 'UserController@dashboard');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@welcome');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Board routes
Route::post('board', ['as' => 'board.store', 'uses' => 'BoardController@store']);
Route::get('board/create', ['as' => 'board.create', 'uses' => 'BoardController@create']);
Route::get('board/{id}', ['as' => 'board.show', 'uses' => 'BoardController@show']);
Route::get('board/destroy/{id}', ['as' => 'board.destroy', 'uses' => 'BoardController@destroy']);

// Card routes
Route::post('card', ['as' => 'card.store', 'uses' => 'SocialCardController@store']);
Route::get('card/destroy/{id}', ['as' => 'card.destroy', 'uses' => 'SocialCardController@destroy']);

