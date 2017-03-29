<?php

namespace Muhammadinaam\Laravelspeed;

use Illuminate\Support\ServiceProvider;

class LaravelspeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $this->publishes([
            __DIR__.'/resources' => base_path('resources'),
        ], 'laravelspeed');
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
