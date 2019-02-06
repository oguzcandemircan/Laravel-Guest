<?php

namespace OguzcanDemircan\LaravelGuest;

use Illuminate\Support\ServiceProvider;
use OguzcanDemircan\LaravelGuest\Commands\InstallCommand;

class LaravelGuestServiceProvider extends ServiceProvider
{   
    /**
     * Laravel Guest Commands
     *
     * @var array
     */
    public $commands = [
        InstallCommand::class,
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'oguzcandermican');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelguest.php', 'laravelguest');

        // Register the service the package provides.
        $this->app->singleton('laravelguest', function ($app) {
            return new LaravelGuest;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelguest'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelguest.php' => config_path('laravelguest.php'),
        ], 'laravelguest.config');

        // Registering package commands.
        $this->commands($this->commands);
    }
}