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

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth.basic.once'], function () {
	Route::resource('product', 'ProductController');
});


Route::get('migration/{isProduct?}', 'IngramMicro\ProductController@migration');

Route::group(['prefix' => 'im'], function () {

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