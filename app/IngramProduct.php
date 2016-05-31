<?php

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Model as Moloquent;

class IngramProduct extends Moloquent
{
    protected $collection = 'ingram_products';

     /**
     * Get the category of each product
     */
    public function category()
    {
        return $this->belongsTo('ClevAppBcRestApi\IngramProductCategory', 'foreign_key', 'category_id');
    }

	/**
	* Get the category of each product
	*/
    public function image()
    {
        return $this->hasOne('ClevAppBcRestApi\IngramProductImage', 'foreign_key', 'part_number');
    }
}
