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
            __DIR__.'/public' => resource_path('assets/js/'),
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
