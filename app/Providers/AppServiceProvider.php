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
       //  if($this->app->environment('production') || $this->app->environment('staging')) {
       //      URL::forceScheme('http');
       //  }

       // app(UrlGenerator::class)->forceScheme('http');
       //      URL::forceScheme('http');
       // if (App::environment('production')) {
       //     URL::forceScheme('http');
       // }
        if(env('REDIRECT_HTTP')) {
            URL::forceScheme('http');
        }
    }
}
