<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/cv', [HomeController::class, 'cv'])->name('cv');
Route::get('/hire-me', [HomeController::class, 'cv'])->name('hire-me');
Route::get('/freelance-php-developer', [HomeController::class, 'cv'])->name('freelance-php-developer');
Route::get('/london-laravel-developer', [HomeController::class, 'cv'])->name('london-laravel-developer');
Route::get('/northampton-laravel-developer', [HomeController::class, 'cv'])->name('northampton-laravel-developer');

Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
