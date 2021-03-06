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
Route::get('/','VideoController@index');
Route::get('/video','VideoController@video');
Route::get('/feature','VideoController@feature');
Route::get('/video/{guid}.html','VideoController@vplay');
Route::get('/feature/{date}/{guid}.html','VideoController@fplay');

//网站地图
Route::get('/sitemap','SitemapController@index');
//网站RSS
Route::get('/rss','RssController@index');