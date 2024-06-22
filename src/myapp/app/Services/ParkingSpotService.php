<?php

namespace App\Services;

use app\Interfaces\ParkingSpotRepositoryInterface;
use App\Interfaces\ParkingSpotServiceInterface;
use App\Models\ParkingSpot;

class ParkingSpotService implements ParkingSpotServiceInterface
{

    private ParkingSpotRepositoryInterface $parkingSpotRepository;

    /**
     * @param ParkingSpotRepositoryInterface $parkingSpotRepository
     */
    public function __construct(ParkingSpotRepositoryInterface $parkingSpotRepository)
    {
        $this->parkingSpotRepository = $parkingSpotRepository;
    }

    /**
     * @param int $id
     * @return void
     */
    public function park(int $id): void
    {
        $this->parkingSpotRepository->setIsOccupied($id, true);
    }

    /**
     * @param int $id
     * @return void
     */

    public function leave(int $id): void
    {
        $this->parkingSpotRepository->setIsOccupied($id, false);
    }

    /**
     * @param int $id
     * @return ParkingSpot
     */
    public function getSpot(int $id): ParkingSpot
    {
        return $this->parkingSpotRepository->getSpot($id);
    }
}
