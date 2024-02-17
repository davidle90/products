<?php namespace Davidle90\Products\App\Facades;

use Illuminate\Support\Facades\Facade;

class Products extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'Davidle90\Products\App\Classes\Helpers';
    }
}
