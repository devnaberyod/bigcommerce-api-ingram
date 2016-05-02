<?php

namespace ClevAppBcRestApi;
use Jenssegers\Mongodb\Model as Moloquent;

class IngramCategory extends Moloquent
{
    protected $collection = 'ingram_categories';
}
