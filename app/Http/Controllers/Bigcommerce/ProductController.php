<?php

namespace ClevAppBcRestApi\Http\Controllers\Bigcommerce;

use ClevAppBcRestApi\Http\Controllers\Controller;
use ClevAppBcRestApi\ClientCredential;
use Bigcommerce\Api\Client as Bigcommerce;
use ClevAppBcRestApi\Http\Requests;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function __construct(Request $request)
  {
  	$origin = 'https://store-74ofb.mybigcommerce.com'; //Get from origin

  	$client = ClientCredential::where('base_url', $origin)->firstOrFail();
  	Bigcommerce::configure(array(
  	    'store_url' => 'https://store-74ofb.mybigcommerce.com',
  	    'username'  => $client->username,
  	    'api_key'   => $client->api_key
  	));
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {	
      return response()->json(Bigcommerce::getProducts());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  /**
   * Return all product reviews
   * TODO: Get Rid of api request inside the loop
  */
  public function reviews()
  {
  	$products = Bigcommerce::getProducts();
  	$productReviews = [];

  	foreach ($products as $key => $value) {
  		$id = $value->id;
  		$reviews = Bigcommerce::getProductReviews($id);
  		
  		if (!$reviews) continue;

  		foreach ($reviews as $review) {
  			if (!$review->status) break;
			$productReviews[$value->id] = array(
				'product_name' => $value->name, 
				'author' => $review->author, 
				'title' => $review->title, 
				'review' => $review->review, 
				'rating' => $review->rating, 
				'status' => $review->status
			);
  		}
  	
  	}

  	return response()->json($productReviews);
  	
  }
}
