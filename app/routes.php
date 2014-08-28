<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@showHome', 'as' => 'welcome']);
Route::get('/quotes', ['uses' => 'QuotesController@quotes', 'as' => 'quotes']);
Route::get('/tests/quotes', function(){
	return View::make('tests.quotes');
});
Route::get('/tests/merge', ['uses' => 'TestsController@merge', 'as' => 'merge']);