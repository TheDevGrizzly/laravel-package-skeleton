<?php

namespace Package\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Package\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
