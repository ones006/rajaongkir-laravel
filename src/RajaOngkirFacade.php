<?php

namespace OnesLynx\RajaOngkir;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OnesLynx\RajaOngkir\EndPoints
 */
class RajaOngkirFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rajaOngkir';
    }
}
