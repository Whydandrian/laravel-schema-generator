<?php

namespace Wahyudi\RepoServiceGenerator;

use Illuminate\Support\ServiceProvider;
use Wahyudi\RepoServiceGenerator\Commands\MakeRepositoryServiceCommand;

class RepoServiceGeneratorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepositoryServiceCommand::class,
            ]);
        }
    }
}
