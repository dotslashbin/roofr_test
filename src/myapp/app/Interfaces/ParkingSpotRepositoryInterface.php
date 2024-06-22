<?php

namespace app\Interfaces;

use App\Models\ParkingSpot;

interface ParkingSpotRepositoryInterface
{
    /**
     * @param int $id
     * @return ParkingSpot
     */
    public function getSpot(int $id): ParkingSpot;

    /**
     * @param int $id
     * @param bool $isOccupied
     * @return void
     */
    public function setIsOccupied(int $id, bool $isOccupied): void;
}
