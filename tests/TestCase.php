<?php

namespace MarwanOsama\FilamentRolesAndPermissionsResources\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use MarwanOsama\FilamentRolesAndPermissionsResources\FilamentRolesAndPermissionsResourcesServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MarwanOsama\\FilamentRolesAndPermissionsResources\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentRolesAndPermissionsResourcesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-roles-and-permissions-resources_table.php.stub';
        $migration->up();
        */
    }
}
