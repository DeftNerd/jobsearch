<?php

/**
 * Frontend Controllers
 */
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);
Route::get('macros', 'FrontendController@macros');

Route::get('contactme',
	['as' => 'contactme', 'uses' => 'ContactMeController@create']);
Route::post('contactme',
		['as' => 'contactme_store', 'uses' => 'ContactMeController@store']);

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function ()
{
	Route::get('dashboard', ['as' => 'frontend.dashboard', 'uses' => 'DashboardController@index']);
	Route::resource('profile', 'ProfileController', ['only' => ['edit', 'update']]);
});
