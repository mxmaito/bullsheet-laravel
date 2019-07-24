<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;


use Illuminate\Support\ServiceProvider;

use App\Poll;
use App\Observers\PollObserver;
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
        Poll::observe(PollObserver::class);
        Schema::defaultStringLength(191);

    }
}
