<?php

namespace App\Interfaces;

use App\Models\ParkingSpot;

interface ParkingLotRepositoryInterface
{
    public function getLotCapacity(int $id): int;

    /**
     * @return ParkingSpot[]
     */
    public function getSpots(int $id, bool $isOccupied, ?string $type = null): array;

    public function getSpotsCount(int $id, bool $isOccupied, ?string $type = null): int;
}
