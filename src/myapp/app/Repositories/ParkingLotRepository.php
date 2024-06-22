<?php

namespace App\Repositories;

use App\Interfaces\ParkingLotRepositoryInterface;
use App\Models\ParkingLot;
use App\Models\ParkingSpot;

class ParkingLotRepository implements ParkingLotRepositoryInterface
{

    /**
     * @param int $id
     * @return int
     */
    public function getLotCapacity(int $id): int
    {
        $parkingLot = ParkingLot::find($id);
        return $parkingLot->parkingSpots()->count();
    }

    /**
     * @param int $id
     * @param bool $isOccupied
     * @param string|null $type
     * @return array|ParkingSpot[]
     */
    public function getSpots(int $id, bool $isOccupied, ?string $type = null): array
    {
        $parkingLot = ParkingLot::find($id);
        $parkingLot->parkingSpots()->where('is_occupied', $isOccupied);

        if($type) {
            $parkingLot->where('type', $type);
        }

        return $parkingLot->get();
    }

    /**
     * @param int $id
     * @param bool $isOccupied
     * @param string|null $type
     * @return int
     */
    public function getSpotsCount(int $id, bool $isOccupied, ?string $type = null): int
    {
        $parkingLot = ParkingLot::find($id);
        $parkingLot->parkingSpots()->where('is_available', $isOccupied);

        if($type) {
            $parkingLot->where('type', $type);
        }

        return $$parkingLot->count();
    }
}
