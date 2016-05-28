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


Route::get('/', 'PagesController@work');

Route::get('/work', 'PagesController@work');

Route::get('/contact', 'PagesController@contact');


Route::get('/touchscreen', 'PagesController@touchscreen');

Route::get('/zune', 'PagesController@zune');

Route::get('/xbox', 'PagesController@xbox');

Route::get('/msSearch', 'PagesController@msSearch');

Route::get('/bannerAds', 'PagesController@bannerAds');

Route::get('/heavymetal', 'PagesController@heavymetal');

Route::get('/trifold', 'PagesController@trifold');

Route::get('/wvposter', 'PagesController@wvposter');

