<?php

namespace Freshbitsweb\LaravelLogEnhancer;

use Illuminate\Support\ServiceProvider;

class CodeCheckersServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/code_checkers.php' => config_path('code_checkers.php'),
        ], 'code-checkers-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/code_checkers.php',
            'code_checkers'
        );
    }
}