<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->setComposerHelpers();
    }

    private function setComposerHelpers()
    {
        view()->composer('errors.404', 'CoderStudios\Composers\Error404Composer');
    }
}
