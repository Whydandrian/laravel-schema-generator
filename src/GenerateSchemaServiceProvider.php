<?php

namespace Wahyudi\GenerateSchema;

use Illuminate\Support\ServiceProvider;
use Wahyudi\GenerateSchema\Commands\GenerateSchemaCommand;

class GenerateSchemaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSchemaCommand::class,
            ]);
        }
    }
}
