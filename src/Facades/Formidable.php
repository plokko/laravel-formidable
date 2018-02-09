<?php

namespace Plokko\Formidable\Facades;

use Illuminate\Support\Facades\Facade;

class Formidable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Plokko\Formidable\Formidable::class;
    }
}
