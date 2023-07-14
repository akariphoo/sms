<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // adminsite/user
        $this->app->bind(
            \App\Repositories\Interfaces\AdminSite\User\UserRepositoryInterface::class,
            \App\Repositories\Repository\AdminSite\User\UserRepository::class
        );

        // adminsite/department
        $this->app->bind(
            \App\Repositories\Interfaces\AdminSite\Department\DepartmentRepositoryInterface::class,
            \App\Repositories\Repository\AdminSite\Department\DepartmentRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
