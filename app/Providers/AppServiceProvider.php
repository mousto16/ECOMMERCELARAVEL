<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Cart;

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
        //
        // View::composer('layouts.masters', function ($view) {
        //     $view->with('cartCount', Cart::getContent()->count());
        // });
    }
}
