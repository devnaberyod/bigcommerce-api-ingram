<?php

namespace ClevAppBcRestApi\Http\Controllers;

use Illuminate\Http\Request;

use ClevAppBcRestApi\Http\Requests;

abstract class BaseApiController extends Controller
{
    protected $dataProvider;

    public function setDataProvider($dataProvider)
    {
    	$this->dataProvider  = $dataProvider;
    }
}
