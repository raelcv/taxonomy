<?php

namespace Datapec\Taxonomy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Datapec\Taxonomy\Taxonomy
 */
class Taxonomy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Datapec\Taxonomy\Taxonomy::class;
    }
}
