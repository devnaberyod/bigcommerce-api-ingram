<?php 

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Model as Moloquent;

class Test extends Moloquent {
	protected $collection = 'user_collection';
}