<?php
namespace App\Repositories;

use app\Interfaces\ParkingSpotRepositoryInterface;
use App\Models\ParkingSpot;

class ParkingSpotRepository implements ParkingSpotRepositoryInterface
{

    public function getSpot(int $id): \App\Models\ParkingSpot
    {
        return ParkingSpot::findOrFail($id);
    }

    public function setIsOccupied(int $id, bool $isOccupied): void
    {
        $parkingSpot = ParkingSpot::findOrFail($id);
        $parkingSpot->isOccupied = $isOccupied;
        $parkingSpot->save();
    }
}
