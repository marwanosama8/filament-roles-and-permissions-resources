<?php

namespace MarwanOsama\FilamentRolesAndPermissionsResources;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MarwanOsama\FilamentRolesAndPermissionsResources\Commands\FilamentRolesAndPermissionsResourcesCommand;

class FilamentRolesAndPermissionsResourcesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-roles-and-permissions-resources')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-roles-and-permissions-resources_table')
            ->hasCommand(FilamentRolesAndPermissionsResourcesCommand::class);
    }
}
