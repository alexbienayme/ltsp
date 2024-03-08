<?php

namespace Joshembling\ImageOptimizer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joshembling\ImageOptimizer\ImageOptimizer
 */
class ImageOptimizer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Joshembling\ImageOptimizer\ImageOptimizer::class;
    }
}
