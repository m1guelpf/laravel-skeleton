<?php

namespace M1guelpf\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \M1guelpf\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
