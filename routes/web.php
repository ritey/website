<?php

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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

Route::get('/cv', ['as' => 'cv', 'uses' => 'HomeController@cv']);
Route::get('/hire-me', ['as' => 'hire-me', 'uses' => 'HomeController@cv']);
Route::get('/freelance-php-developer', ['as' => 'freelance-php-developer', 'uses' => 'HomeController@cv']);
Route::get('/london-laravel-developer', ['as' => 'london-laravel-developer', 'uses' => 'HomeController@cv']);
Route::get('/northampton-laravel-developer', ['as' => 'northampton-laravel-developer', 'uses' => 'HomeController@cv']);

Route::get('/sitemap.xml', ['as' => 'sitemap', 'uses' => 'HomeController@sitemap']);

Route::get('/idea-badge', ['as' => 'idea-badge', 'uses' => 'HomeController@badge']);
Route::get('/badge/auth/callback', ['as' => 'idea-badge-callback', 'uses' => 'HomeController@badgeCallback']);
