<?php

namespace App\Interfaces;

use App\Models\ParkingSpot;

interface ParkingLotServiceInterface
{
    /**
     * @param int $id
     * @param string|null $type
     * @return ParkingSpot[]
     */
    public function getAvailableParkingSpots(int $id, ?string $type = null): array;

    /**
     * @param int $id
     * @param string|null $type
     * @return ParkingSpot[]
 */
    public function getUnavailableParkingSpots(int $id, ?string $type = null): array;

    /**
     * @param int $id
     * @param string|null $type
     * @return int
     */
    public function getAvailableParkingSpotsCount(int $id, ?string $type = null): int;

    /**
     * @param int $id
     * @param string|null $type
     * @return int
     */
    public function getUnavailableParkingSpotsCount(int $id, ?string $type = null): int;
}
