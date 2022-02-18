<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // can fetch from database table

        // for now pass an array

        $data = array();
        $data['a'] = 100;
        $data['b'] = 200;
        $data['c'] = 300;

        view()->share('number', $data);
    }
}
