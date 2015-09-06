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


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/terms', ['as' => 'terms', 'uses' => 'PageController@terms']);
Route::get('/about', ['as' => 'about', 'uses' => 'PageController@about']);
Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PageController@privacy']);
Route::get('/advertise', ['as' => 'advertise', 'uses' => 'PageController@advertise']);

