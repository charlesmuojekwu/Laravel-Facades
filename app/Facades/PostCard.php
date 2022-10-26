<?php

namespace App\Facades;

class Postcard
{

    protected static function resolveFacade($name)
    {
        return app()->make($name);
    }

    // public static function __callStatic($method, $arguments)
    // {
    //     return (self::resolveFacade('Postcard'))
    //         ->$method(...$arguments);
    // }

    protected static function getFacadeAccessor()
    {
        return 'Postcard';
    }


    /// This happens in laravel facade class to be extended
    public static function __callStatic($name, $arguments)
    {
        return app()->make(self::getFacadeAccessor())->$name(...$arguments);
    }
}
