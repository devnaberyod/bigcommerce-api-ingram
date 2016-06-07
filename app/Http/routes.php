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
	if (auth()->check() && auth()->user()) {
		return redirect()->route('dashboard');
	}
	
    return view('front/home');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/dashboard', ['as' => 'dashboard', function () {
	    return view('front/dashboard');
	}]);

	Route::get('/store-management', function () {
	    return view('front/store_management');
	});

	Route::get('/settings', function () {
	    return view('front/settings');
	});

	Route::get('/account', function () {
	    return view('front/account');
	});
});


Route::group(['prefix' => 'bc/v1'], function () {
	Route::get('products/reviews', 'Bigcommerce\ProductController@reviews');
	Route::resource('product', 'Bigcommerce\ProductController');
});

//TODO: Make Migration Controller
Route::get('/im/v1/migration/{isProduct?}', 'IngramMicro\ProductController@migration');
Route::get('/im/v1/migration-product-images', 'IngramMicro\ProductController@migrationProductImages');

Route::group(['prefix' => 'im/v1'], function () {

	Route::get('product/vendor/{name}', 'IngramMicro\ProductController@vendor');
	Route::get('product/brands', 'IngramMicro\ProductController@brand');
	Route::get('product/count', 'IngramMicro\ProductController@count');

	Route::resource('product', 'IngramMicro\ProductController');
	
	Route::get('category/{id}/products', 'IngramMicro\CategoryController@categoryProducts');

	Route::resource('category', 'IngramMicro\CategoryController');

	Route::resource('products.images', 'IngramMicro\ProductImageController', [
		'parameters' => 'singular'
	]);

});

Route::group(['prefix' => 'auth'], function() {
	Route::auth();
});

