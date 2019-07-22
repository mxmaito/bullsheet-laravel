<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;


use Illuminate\Support\ServiceProvider;

use App\ChekNew;
use App\Observers\ChekNewObserver;
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
        ChekNew::observe(ChekNewObserver::class);
        Schema::defaultStringLength(191);

    }
}
