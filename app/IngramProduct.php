<?php

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Model as Moloquent;

class IngramProduct extends Moloquent
{
    protected $collection = 'ingram_products';
}
