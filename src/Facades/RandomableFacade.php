<?php

namespace Jerickcm\Packagedb\Facades;

use Illuminate\Support\Facades\Facade;

class RandomableFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'randomable';
    }
}
