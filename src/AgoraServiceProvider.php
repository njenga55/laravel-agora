<?php

namespace Njenga55\Agora;

use Illuminate\Support\ServiceProvider;

class AgoraServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/agora.php' => config_path('agora.php')
        ]);
    }

    /**
     * Register a class in the service container
     */
    public function regiter()
    {
        $this->app->bind('agora', function ($app) {
            return new AgoraProvider();
        });
    }
}
