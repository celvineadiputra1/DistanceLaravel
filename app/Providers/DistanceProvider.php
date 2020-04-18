<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DistanceService;
use App\Services\DistanceServiceImpl;


class DistanceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DistanceService::class, DistanceServiceImpl::class);
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
