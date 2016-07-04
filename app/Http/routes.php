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

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index' ]);

Route::get('/cv', ['as' => 'cv', 'uses' => 'HomeController@cv' ]);
Route::get('/hire-me', ['as' => 'hire-me', 'uses' => 'HomeController@cv' ]);
Route::get('/freelance-php-developer', ['as' => 'freelance-php-developer', 'uses' => 'HomeController@cv' ]);

Route::get('/sitemap.xml', ['as' => 'sitemap', 'uses' => 'HomeController@sitemap']);