<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use function PHPUnit\Framework\returnSelf;

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
        Blade::if('reg', function() {
            $path = explode('/', request()->path());
                return $path[0] == "registration";
        });

        Blade::if('login', function() {
            $path = explode('/', request()->path());
            return $path[0] == "login";
        });

        Blade::if('main', function() {
            $path = explode('/', request()->path());
            return $path[0] == "";
        });

        Blade::if('things', function() {
            $path = explode('/', request()->path());
            return $path[0] == "things" or $path[0] == 'creatething' or $path[0] == 'updatething';
        });

        Blade::if('places', function() {
            $path = explode('/', request()->path());
            return $path[0] == "places" or $path[0] == 'createplace' or $path[0] == 'updateplace';
        });

        Blade::if('uses', function() {
            $path = explode('/', request()->path());
            return $path[0] == "uses" or $path[0] == 'givething' or $path[0] == 'updateuse';
        });


    }
}
