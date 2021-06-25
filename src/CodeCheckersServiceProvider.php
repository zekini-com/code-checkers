<?php

namespace zekini\CodeCheckers;

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
        $this->publishes(
            [
                __DIR__ . '/../config/code_checkers.php' => config_path('code_checkers.php'),
            ],
            'code-checkers-config'
        );

        $this->publishes(
            [
                __DIR__ . '/../ecs.php' => '/ecs.php',
            ],
            'ecs.php'
        );

        $this->publishes(
            [
                __DIR__ . '/../phpstan.neon' => '/phpstan.neon',
            ],
            'phpstan.neon'
        );

        $this->publishes(
            [
                __DIR__ . '/../psalm.xml' => '/psalm.xml',
            ],
            'psalm.xml'
        );
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/code_checkers.php',
            'code_checkers'
        );
    }
}
