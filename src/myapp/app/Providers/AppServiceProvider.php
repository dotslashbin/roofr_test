<?php

namespace App\Providers;

use App\Interfaces\ParkingLotRepositoryInterface;
use app\Interfaces\ParkingSpotRepositoryInterface;
use App\Repositories\ParkingLotRepository;
use App\Repositories\ParkingSpotRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ParkingSpotRepositoryInterface::class, ParkingSpotRepository::class);
        $this->app->bind(ParkingLotRepositoryInterface::class, ParkingLotRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
