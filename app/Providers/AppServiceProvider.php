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
        view()->composer(
            '*',
            function ($view) {
                $arr = explode('.', $view->getName());
                if (count($arr) < 3) {
                    return;
                }
                $alias  = $arr[1];
                $branch = $arr[0];
                $name   = $arr[2];
                view()->share([
                    'alias'  => $alias,
                    'branch' => $branch,
                    'class'  => $branch . ' ' . $alias . ' ' . $name,
                    'css'    => 'css/'  . $branch . '/' . $alias . '/' . $name . '.css',
                    'js'     => 'js/'   . $branch . '/' . $alias . '/' . $name . '.js',
                    'name'   => $name
                ]);
            }
        );
    }
}
