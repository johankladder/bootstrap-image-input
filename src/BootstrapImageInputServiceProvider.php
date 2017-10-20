<?php

namespace JohanKladder\BootstrapImageInput;

use Illuminate\Support\ServiceProvider;

class BootstrapImageInputServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'bootstrap-image-input');

        $this->publishes([
            __DIR__.'/assets' => resource_path('assets/js/bootstrap-image-input'),
            __DIR__.'/assets/style.css' => public_path('bootstrap-image-input/css/style.css'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
