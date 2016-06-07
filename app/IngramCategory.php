<?php

namespace ClevAppBcRestApi;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class IngramCategory extends Moloquent
{
    protected $collection = 'ingram_categories';

	 /**
	 * Get the products for each category.
	 */
    public function products()
    {
        return $this->hasMany('ClevAppBcRestApi\IngramProduct', 'foreign_key', 'category_id');
    }
}
