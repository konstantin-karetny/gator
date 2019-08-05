<?php

namespace App\Providers;

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
        error_reporting(E_ALL ^ E_NOTICE);
        view()->composer(
            '*',
            function ($view) {
                $arr        = explode('.', $view->getName());
                $std        = count($arr) == 3;
                $controller = $std ? $arr[1] : '';
                $branch     = $std ? $arr[0] : '';
                $name       = $std ? $arr[2] : '';
                view()->share([
                    'controller' => $controller,
                    'branch'     => $branch,
                    'class'      => trim($branch . ' ' . $controller . ' ' . $name),
                    'css'        => 'css/'  . $branch . '/' . $controller . '/' . $name . '.css',
                    'js'         => 'js/'   . $branch . '/' . $controller . '/' . $name . '.js',
                    'name'       => $name
                ]);
            }
        );
    }
}
