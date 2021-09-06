<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
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

Route::get('/', 'App\Http\Controllers\PagesController@getHome')->name('home');

Route::get('/contact','App\Http\Controllers\PagesController@getContact')->name('contact');

Route::get('/about', 'App\Http\Controllers\PagesController@getAbout')->name('about');

Route::post('/submit', 'App\Http\Controllers\ContactController@submit')->name('submit');

Route::get('/contact/messages','App\Http\Controllers\ContactController@getMessages');


