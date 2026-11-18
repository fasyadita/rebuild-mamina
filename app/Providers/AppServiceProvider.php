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
        if (file_exists(app_path('helpers.php'))) {
            require_once app_path('helpers.php');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\Blade::directive('cdn', function ($expression) {
            return "<?php echo cdn_asset($expression); ?>";
        });

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
