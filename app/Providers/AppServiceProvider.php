<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer(
            [
                'welcome',
                'welcome-guest',
                'welcome-member',
                'main.landing.*',
                'guest.landing.*',
                'member.landing.*',
            ],
            \App\Http\View\Composers\CmsComposer::class
        );
    }
}
