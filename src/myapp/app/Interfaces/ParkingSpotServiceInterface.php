<?php
namespace App\Interfaces;

use App\Models\ParkingSpot;

interface ParkingSpotServiceInterface
{
    /**
     * @param int $id
     * @return void
     */
    public function park(int $id): void;

    /**
     * @param int $id
     * @return void
     */
    public function leave(int $id): void;

    /**
     * @param int $id
     * @return ParkingSpot
     */
    public function getSpot(int $id): ParkingSpot;
}
