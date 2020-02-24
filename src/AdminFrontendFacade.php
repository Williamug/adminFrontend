<?php

namespace Williamug\AdminFrontend;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Williamug\AdminFrontend\Skeleton\SkeletonClass
 */
class AdminFrontendFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'adminfrontend';
    }
}
