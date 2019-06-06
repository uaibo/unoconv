<?php

namespace Angusm73\Unoconv\Facades;

class Unoconv extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'unoconv';
    }
}
