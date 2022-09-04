<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModelProvider extends ServiceProvider
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
//        $this->app->bind(EventPusher::class, RedisEventPusher::class);

    }
}
