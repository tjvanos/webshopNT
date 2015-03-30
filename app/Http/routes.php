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

Route::get('/','ShopController@index');

Route::get('about','ShopController@about');

Route::get('product','ProductController@index');

Route::get('{id}','ProductController@showCategory');

Route::get('{id}/{productid}','ProductController@showProduct');

