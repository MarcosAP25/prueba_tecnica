<?php

namespace prueba_tecnica\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $baUrl = env('API_CUSTOMERS_ENDPOINT');
        $this->app->singleton(Client::class, function($app) use ($baUrl) {
            return new Client(['base_uri' => $baUrl]);
        });
    }
}
