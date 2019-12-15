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
Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(
	function () {
		Route::get('products', 'ProductController@index')->name('products');
		Route::get('cart/{id}', 'ProductController@cart')->name('cart');
		Route::get('checkout', 'ProductController@checkout')->name('checkout');
		Route::get('specials', 'ProductController@specials');
		Route::get('reviews', 'ReviewController@index');
		Route::get('/home', 'HomeController@index')->name('home');
	}
);





