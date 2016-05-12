<?php

namespace ClevAppBcRestApi\Http\Controllers;

use ClevAppBcRestApi\Http\Controllers\BaseApiController;

class ProductController extends BaseApiController
{
    function __construct() {
    	$this->setDataProvider('test');
    }

    function index() {
    	$data = $this->dataProvider;
    	
    	return $data;
    }

    function store() {
    	return array(1);
    }

    function reviews() {
        
    }
}
