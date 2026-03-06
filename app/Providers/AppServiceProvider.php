<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
        /**
         * Blade directive to mark navigation items as active
         * when the current route name start with a given prefix.
         * 
         * Usage:
         * <li class = "nav-item @activeRoutePrefix('member')"> 
         *      member
         * </li>
         * 
         * Route matches :
         * member.index
         * member.create
         * member.store
         */

        Blade::directive('activeRoutePrefix', function ($prefix) {
            return "<?php echo str_starts_with(Route::currentRouteName(), $prefix) ? 'active' : ''; ?>";
        });
    }
}
