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

Route::get('/',['as' => 'home.index', 'uses' =>
    'HomeController@home']);
Route::get('/about',['as' => 'about.index', 'uses' =>
    'HomeController@about']);
Route::get('/news',['as' => 'news.index', 'uses' =>
    'HomeController@news']);