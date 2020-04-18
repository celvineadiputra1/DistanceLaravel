<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\DistanceRepository;
use App\Repository\DistanceRepositoryImpl;

class DistanceProviderRepo extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DistanceRepository::class, DistanceRepositoryImpl::class);
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
