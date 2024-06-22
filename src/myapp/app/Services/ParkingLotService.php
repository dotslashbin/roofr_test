<?php
namespace App\Services;

use App\Interfaces\ParkingLotRepositoryInterface;
use App\Interfaces\ParkingLotServiceInterface;
use App\Models\ParkingSpot;

class ParkingLotService implements ParkingLotServiceInterface
{
    private ParkingLotRepositoryInterface $parkingLotRepository;

    /**
     * @param ParkingLotRepositoryInterface $parkingLotRepository
     */
    public function __construct(ParkingLotRepositoryInterface $parkingLotRepository)
    {
        $this->parkingLotRepository = $parkingLotRepository;
    }

    /**
     * @param int $id
     * @param string|null $type
     * @return ParkingSpot[]
     */
    public function getAvailableParkingSpots(int $id, ?string $type = null): array
    {
        return $this->parkingLotRepository->getSpots($id, true, $type);
    }

    /**
     * @param int $id
     * @param string|null $type
     * @return int
     */
    public function getAvailableParkingSpotsCount(int $id, ?string $type = null): int
    {
        return $this->parkingLotRepository->getSpotsCount($id, false, $type);
    }

    /**
     * @param int $id
     * @param string|null $type
     * @return int
     */
    public function getUnavailableParkingSpotsCount(int $id, ?string $type = null): int
    {
        return $this->parkingLotRepository->getSpotsCount($id, true, $type);
    }

    /**
     * @param int $id
     * @param string|null $type
     * @return ParkingSpot[]
     */
    public function getUnavailableParkingSpots(int $id, ?string $type = null): array
    {
        return $this->parkingLotRepository->getSpots($id, false, $type);
    }
}
