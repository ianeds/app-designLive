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

use Illuminate\Http\Request;
use App\Task;


Route::get('/', 'PagesController@home');

Route::get('/work', 'PagesController@work');

Route::get('/about', 'PagesController@about');

Route::get('/touchscreen', 'PagesController@touchscreen');

Route::get('/inter', 'PagesController@inter');

Route::get('/search', 'PagesController@search');

Route::get('/bannerAds', 'PagesController@bannerAds');

Route::get('/posters', 'PagesController@posters');

Route::get('/marks', 'PagesController@marks');

Route::get('/trifold', 'PagesController@trifold');

Route::get('/wvposter', 'PagesController@wvposter');

