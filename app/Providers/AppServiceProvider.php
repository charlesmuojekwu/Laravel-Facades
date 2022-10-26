<?php

namespace App\Providers;

use App\Service\PostcardService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Alias to POSTCARD/POSTCARD2 to be used in facade class

        $this->app->singleton('Postcard', function($app) {
            return new PostcardService('US', "4", "7");
        });

        $this->app->singleton('Postcard2', fn($app) => new PostcardService('US', "4", "7"));
    }
}
