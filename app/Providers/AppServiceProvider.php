<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Cashier::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        if($this->app->environment('production') || $this->app->environment('staging')) {
//            URL::forceScheme('https');
//        }

//        app(UrlGenerator::class)->forceScheme('https');
            URL::forceScheme('https');
//        if (App::environment('production')) {
//            URL::forceScheme('https');
//        }
    }
}
