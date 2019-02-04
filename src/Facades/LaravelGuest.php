<?php

namespace OguzcanDemircan\LaravelGuest\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelGuest extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelguest';
    }
}
