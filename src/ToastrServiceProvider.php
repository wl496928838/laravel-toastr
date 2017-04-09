<?php

namespace Csl\Toastr;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class ToastrServiceprovider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('toastr.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('toastr', function () {
            return $this->app->make('Csl\Toastr\ToastrNotifier');
        });
    }

    private function registerToastr()
    {
        $this->app->bind('toastr', function ($app)
        {
            return new Toastr($app->session, $app->config);
        });
    }

    /**
     * Get the services provider by the provider
     *
     * @return array
     */
    public function provides()
    {
        return ['toastr'];
    }
}
