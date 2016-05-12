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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'bc/v1'], function () {
	Route::get('products/review', 'Bigcommerce\ProductController@reviews');
	Route::resource('product', 'Bigcommerce\ProductController');
});

//TODO: Make Migration Controller
Route::get('/im/migration/{isProduct?}', 'IngramMicro\ProductController@migration');
Route::get('/im/migration-product-images', 'IngramMicro\ProductController@migrationProductImages');

Route::group(['prefix' => 'im/v1'], function () {

	Route::get('product/vendor/{name}', 'IngramMicro\ProductController@vendor');

	Route::resource('product', 'IngramMicro\ProductController');
	
	Route::get('category/{id}/products', 'IngramMicro\CategoryController@categoryProducts');

	Route::resource('category', 'IngramMicro\CategoryController');

});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
	Route::resource("tweets","TweetController");
});