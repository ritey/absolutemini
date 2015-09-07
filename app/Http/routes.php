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

Route::get('/image.png', ['as' => 'image', 'uses' => 'ImageController@render']);

Route::get('/terms', ['as' => 'terms', 'uses' => 'PageController@terms']);
Route::get('/about', ['as' => 'about', 'uses' => 'PageController@about']);
Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PageController@privacy']);
Route::get('/advertise', ['as' => 'advertise', 'uses' => 'PageController@advertise']);

Route::get('/codey', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
Route::get('/codey/image', ['as' => 'admin.images.index', 'uses' => 'ImageController@index']);
Route::get('/codey/image/new', ['as' => 'admin.images.new', 'uses' => 'ImageController@create']);
Route::post('/codey/image/new', ['as' => 'admin.images.create', 'uses' => 'ImageController@store']);
Route::get('/codey/image/{id}/destroy', ['as' => 'admin.images.destroy', 'uses' => 'ImageController@destroy']);
Route::get('/codey/content', ['as' => 'admin.content.index', 'uses' => 'ContentController@adminIndex']);
Route::get('/codey/content/new', ['as' => 'admin.content.new', 'uses' => 'ContentController@create']);
Route::get('/codey/content/{id}/edit', ['as' => 'admin.content.show', 'uses' => 'ContentController@edit']);
Route::put('/codey/content/{id}/edit', ['as' => 'admin.content.update', 'uses' => 'ContentController@update']);

Route::get('/{category_slug}/{article_slug}', ['as' => 'article', 'uses' => 'ArticleController@article']);
