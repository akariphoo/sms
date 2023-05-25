<?php

namespace App\Providers;

use App\Repositories\Interfaces\AdminSite\User\UserRepositoryInterface;
use App\Repositories\Repository\AdminSite\User\UserRepository;
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
        // 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
