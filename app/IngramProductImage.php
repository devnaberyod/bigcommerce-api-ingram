<?php

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class IngramProductImage extends Moloquent
{
    protected $collection = 'ingram_product_images';

    /**
	* Get the category of each product
	*/
    public function product()
    {
        return $this->belongsTo('ClevAppBcRestApi\IngramProduct', 'foreign_key', 'part_number');
    }
}
