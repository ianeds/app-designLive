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

Route::get('/chips', 'PagesController@chips');

Route::get('/qualitytime', 'PagesController@qualitytime');

Route::get('/sqpat', 'PagesController@sqpat');

Route::get('/trop', 'PagesController@trop');

Route::get('/jusquabout', 'PagesController@jusquabout');

Route::get('/simplethings', 'PagesController@simplethings');

Route::get('/diamonds', 'PagesController@diamonds');

Route::get('/wellthen', 'PagesController@wellthen');

Route::get('/work', 'PagesController@work');

Route::get('/about', 'PagesController@about');

Route::get('/touchscreen', 'PagesController@touchscreen');

Route::get('/inter', 'PagesController@inter');

Route::get('/bannerAds', 'PagesController@bannerAds');


