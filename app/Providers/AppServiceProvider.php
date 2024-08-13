<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('mailer', function ($app) {
            $mailer = new Mailer(
                Transport::fromDsn(config('mail.mailer_symfony_transport_dsn'))
            );
    
            return $mailer;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
