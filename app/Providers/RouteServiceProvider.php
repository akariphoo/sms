<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            // for admin_site/users
            Route::group([
                    'prefix' => 'admin/user',
                    'middleware' => ['web', 'role:admin'],
                    'namespace' => $this->namespace,
                ], function ($router) {
                    require base_path('routes/admin_site/users/web.php');
                });

             // for admin_site/departments
             Route::group([
                    'prefix' => 'admin/department',
                    'middleware' => ['web', 'role:admin'],
                    'namespace' => $this->namespace,
                ], function ($router) {
                    require base_path('routes/admin_site/departments/web.php');
            });

            // for admin_site/courses
            Route::group([
                'prefix' => 'admin/course',
                'middleware' => ['web', 'role:admin'],
                'namespace' => $this->namespace,
            ], function ($router) {
                require base_path('routes/admin_site/courses/web.php');
        });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
