<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Alert;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('alert', function ($app) {
            return new Alert($app['session'], $app['view']);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
