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

Route::get('home', 'HomeController@index');

Route::get('level', 'LevelController@index');

Route::get('level/add', 'LevelController@create');

Route::post('level/add', 'LevelController@store');

Route::get('level/destroy/{id}', 'LevelController@show');

Route::get('level/edit/{id}', 'LevelController@edit');

Route::get('level/view', 'LevelController@view');



// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
