<?php namespace App\Providers;

use Facebook\FacebookSession;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        FacebookSession::setDefaultApplication(env('APP_PUBLIC'), env('APP_SECRET'));
    }
}
