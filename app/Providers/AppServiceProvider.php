<?php

namespace App\Providers;

use App\Repositories\SettingRepository;
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
        view()->composer('*', function($view){
            $setting = SettingRepository::query()->latest()->first();
            $view->with('setting', $setting);
        });
    }
}
