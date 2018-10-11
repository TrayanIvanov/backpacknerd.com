<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'IndexController@index');
Route::get('articles', 'ArticlesController@allArticles');
Route::get('article/{article}', 'ArticlesController@selectedArticle');
Route::get('contacts', 'ContactsController@index');
Route::post('contacts', 'ContactsController@contactMe');
Route::post('subscribe', 'ContactsController@subscribeMe');
Route::get('calendar', 'CalendarController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
