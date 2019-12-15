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

Route::view('/', 'welcome');

Route::get('products', 'ProductController@index')->name('products')->middleware(
	'verified'
);

Route::get('cart/{id}', 'ProductController@cart')->name('cart')->middleware(
	'verified'
);

Route::get('checkout', 'ProductController@checkout')->name('checkout')
	->middleware('verified');

Route::get('specials', 'ProductController@specials')->middleware('verified');

Route::get('reviews', 'ReviewController@index');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
