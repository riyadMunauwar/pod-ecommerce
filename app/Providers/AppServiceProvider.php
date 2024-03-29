<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Contracts\TwoFactorLoginResponse as TwoFactorLoginResponseContract;


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
        // Jetstream Override Login Response
        $this->app->singleton(LoginResponseContract::class, LoginResponse::class);
        $this->app->singleton(TwoFactorLoginResponseContract::class, LoginResponse::class);
    }
    
}
