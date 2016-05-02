<?php

namespace ClevAppBcRestApi\Http\Controllers;

use Illuminate\Http\Request;

use ClevAppBcRestApi\Http\Requests;
use ClevAppBcRestApi\Users;
use ClevAppBcRestApi\IngramProduct;

class ImcController extends Controller
{
    public function index(Request $request)
    {
    	/*$xmlData = '<?xml version = "1.0" encoding = "ISO-8859-1"?>
					<BusinessTransactionRequest xmlns = "http://www.ingrammicro.com/pcg/in/PriceAndAvailibilityRequest">
					<RequestPreamble>
					<TransactionClassifier>2.0</TransactionClassifier>
					<TransactionID>Test1-Status</TransactionID>
					<UserName>AU_241007</UserName>
					<UserPassword>Ingram@1030</UserPassword>
					<CountryCode>AU</CountryCode>
					</RequestPreamble>
					<PriceAndAvailabilityRequest>
					<PriceAndAvailabilityPreference>1</PriceAndAvailabilityPreference>
					<Item>
					<IngramPartNumber>1867603</IngramPartNumber>
					<RequestedQuantity UnitOfMeasure = "EA">1</RequestedQuantity>
					</Item>
					</PriceAndAvailabilityRequest>
					</BusinessTransactionRequest>';*/



		$xmlData = '<?xml version = "1.0" encoding = "ISO-8859-1"?>
					<BusinessTransactionRequest xmlns = "https://www.ingrammicro.com/pcg/in/PriceAndAvailibilityRequest">
					  <RequestPreamble>
					    <TransactionClassifier>2.0</TransactionClassifier>
					    <TransactionID>'.uniqid().'</TransactionID>
					    <TimeStamp>2012-04-04T01:25:35</TimeStamp>
					  	<UserName>AU_241007</UserName>
						<UserPassword>Ingram@1030</UserPassword>
					    <CountryCode>AU</CountryCode>
					  </RequestPreamble>
					  <PriceAndAvailabilityRequest>
					    <PriceAndAvailabilityPreference>3</PriceAndAvailabilityPreference>
					    <Item>
					      <IngramPartNumber>3101644</IngramPartNumber>
					      <RequestedQuantity UnitOfMeasure = "EA">3</RequestedQuantity>
					    </Item>
					    <Item>
					      <IngramPartNumber>1953788</IngramPartNumber>
					      <RequestedQuantity UnitOfMeasure = "EA">2</RequestedQuantity>
					    </Item>
					  </PriceAndAvailabilityRequest>
					</BusinessTransactionRequest>';
	
 		$url = 'https://mercury.ingrammicro.com/SeeburgerHTTP/HTTPController?HTTPInterface=syncReply';
 		$ch = curl_init();
 		$headers = array(
 		    "Content-Type: text/xml; charset=utf-8",
 		    "Content-Length: " . strlen($xmlData)
 		);
 		curl_setopt($ch, CURLOPT_URL, $url);
 		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 		curl_setopt($ch, CURLOPT_POST, true);
 		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 		curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
 		$result = curl_exec($ch);
 		curl_close($ch);

 		return $result;

    }

    public function show(Request $request)
    {

    }
}