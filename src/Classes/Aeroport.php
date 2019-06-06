<?php
class Aeroport
{
    /**
     * @var AbstractVehicle[]
     */
    private $vehicles;
    public function __construct()
    {
        $this->vehicles = [];
    }
    public function addVehicle(VehicleInterface $vehicle)
    {
        $vehicle->go(15);
        $this->vehicles[] = $vehicle;
    }
}