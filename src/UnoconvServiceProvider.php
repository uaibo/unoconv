<?php

namespace Angusm73\Unoconv;

use Illuminate\Support\ServiceProvider;

class UnoconvServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/unoconv.php' => config_path('unoconv.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/unoconv.php',
            'unoconv'
        );
    }
}
