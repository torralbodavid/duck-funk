<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Torralbodavid\DuckFunkCore\DuckFunkCore;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DuckFunkCore::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
