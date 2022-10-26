<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Postcard2 extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Postcard2';
    }

    // protected static function resolveFacade($name)
    // {
    //     return app()->make($name);
    // }

    // public static function __callStatic($method, $arguments)
    // {
    //     return (self::resolveFacade('Postcard'))
    //         ->$method(...$arguments);
    // }
}
