<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/error/404', [HomeController::class, 'error404'])->name('404');

Route::get('/image.png', [ImageController::class, 'render'])->name('image');

Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/advertise', [PageController::class, 'advertise'])->name('advertise');
Route::get('/sitemap.php', [PageController::class, 'sitemap'])->name('user.sitemap');
Route::get('/sitemap.xml', [PageController::class, 'index'])->name('sitemap');

Route::get('/codey', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
Route::get('/codey/image', ['as' => 'admin.images.index', 'uses' => 'ImageController@index']);
Route::get('/codey/image/new', ['as' => 'admin.images.new', 'uses' => 'ImageController@create']);
Route::post('/codey/image/new', ['as' => 'admin.images.create', 'uses' => 'ImageController@store']);
Route::get('/codey/image/{id}/destroy', ['as' => 'admin.images.destroy', 'uses' => 'ImageController@destroy']);
Route::get('/codey/content', ['as' => 'admin.content.index', 'uses' => 'ContentController@adminIndex']);
Route::get('/codey/content/new', ['as' => 'admin.content.new', 'uses' => 'ContentController@create']);
Route::get('/codey/content/{id}/edit', ['as' => 'admin.content.show', 'uses' => 'ContentController@edit']);
Route::put('/codey/content/{id}/edit', ['as' => 'admin.content.update', 'uses' => 'ContentController@update']);
Route::post('/codey/content', ['as' => 'admin.content.create', 'uses' => 'ContentController@store']);

Route::get('/codey/category', ['as' => 'admin.category.index', 'uses' => 'CategoryController@index']);
Route::get('/codey/category/new', ['as' => 'admin.category.new', 'uses' => 'CategoryController@create']);
Route::get('/codey/category/{id}/edit', ['as' => 'admin.category.edit', 'uses' => 'CategoryController@edit']);
Route::put('/codey/category/{id}/edit', ['as' => 'admin.category.update', 'uses' => 'CategoryController@update']);
Route::post('/codey/category', ['as' => 'admin.category.create', 'uses' => 'CategoryController@store']);

Route::get('/{category_slug}', [ArticleController::class, 'category'])->name('category');
Route::get('/{category_slug}/{article_slug}', [ArticleController::class, 'article'])->name('article');
