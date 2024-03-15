<?php

namespace MarwanOsama\FilamentRolesAndPermissionsResources\Commands;

use Illuminate\Console\Command;

class FilamentRolesAndPermissionsResourcesCommand extends Command
{
    public $signature = 'filament-roles-and-permissions-resources';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
