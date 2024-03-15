<?php

namespace MarwanOsama\FilamentRolesAndPermissionsResources\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarwanOsama\FilamentRolesAndPermissionsResources\FilamentRolesAndPermissionsResources
 */
class FilamentRolesAndPermissionsResources extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MarwanOsama\FilamentRolesAndPermissionsResources\FilamentRolesAndPermissionsResources::class;
    }
}
