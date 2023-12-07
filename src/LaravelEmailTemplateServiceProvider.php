<?php

namespace ar443\LaravelEmailTemplate;

use Illuminate\Support\ServiceProvider;

class LaravelEmailTemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Migrations' => database_path('migrations'),
        ], 'migrations');
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/ar443/LaravelEmailTemplate'),
        ], 'views');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        $this->loadViewsFrom(__DIR__ . 'Resources/views/email-templates', 'ar443\LaravelEmailTemplate');

    }

    public function register()
    {
        // Register any bindings or services
    }
}

?>