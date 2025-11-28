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
        $this->loadAdminRoutes();
    }

    protected function loadAdminRoutes()
    {
        if (file_exists(base_path('routes/admin.php'))) {
            require base_path('routes/admin.php');
        }
    }
}
