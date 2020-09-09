<?php

namespace Laranext\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            Console\ActionCommand::class,
            Console\ActionsCommand::class,
            Console\ControllerCommand::class,
            Console\FieldsCommand::class,
            Console\FilterCommand::class,
            Console\FiltersCommand::class,
            Console\MigrationCommand::class,
            Console\ModelCommand::class,
            Console\PackageCommand::class,
            Console\PurgeCommand::class,
            Console\RequestCommand::class,
            Console\ResourceCollectionCommand::class,
            Console\ResourceCommand::class,
            Console\ViewsCommand::class,
        ]);
    }
}
