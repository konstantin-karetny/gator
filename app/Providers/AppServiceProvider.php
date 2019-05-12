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
        view()->composer('*', function ($view) {
            $arr    = explode('.', $view->getName());
            $branch = reset($arr);
            $name   = end($arr);
            view()->share([
                'branch' => $branch,
                'class'  => $branch . ' ' . $name,
                'css'    => 'css/'  . $branch . '/' . $name . '.css',
                'js'     => 'js/'   . $branch . '/' . $name . '.js',
                'name'   => $name
            ]);
        });
    }
}
