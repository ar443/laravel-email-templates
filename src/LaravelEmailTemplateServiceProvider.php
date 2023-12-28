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
            __DIR__ . '/resources/views' => resource_path('views/LaravelEmailTemplate'),
        ], 'views');
        $this->publishes([
            __DIR__ . '/public' => public_path('LaravelEmailTemplate'),
        ], 'views');
    }

    public function register()
    {
        // Register any bindings or services
    }
}

?>