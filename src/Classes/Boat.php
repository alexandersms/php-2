<?php

class Boat extends AbstractVehicle{
    /**
     * @array
     */
    private $ports;

    public function __construct(string $brand, string $motor, array $ports){
        // On rappelle la methode
        parent::__construct($brand, $motor, 0);
        $this->ports = $ports;

    }

    public function go(int $km): void{
        // On rappelle la methode
        //parent::go($km);
        // On rajoute
        echo ("POOOOOOOOOOOOOOOOOOON ");
    }

    public function getPorts()
    {
        return $this->ports;
    }

    public function setPorts($ports):void
    {
        $this->ports = $ports;
    }

}