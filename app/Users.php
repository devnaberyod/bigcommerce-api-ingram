<?php 

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Model as Moloquent;

class Users extends Moloquent {
	protected $collection = 'users';
}