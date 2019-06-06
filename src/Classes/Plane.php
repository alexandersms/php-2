<?php

class Plane extends AbstractVehicle{
    private $maxAlt;

    public function go(int $km): void{
        // On rappelle la methode
        //parent::go($km);
        // On rajoute
        echo ("BROOOOOOOOOOOUUUUUUUUUUUM BROOOOOOOOOOOUUUUUUUUUUUM ");
    }

    public function getMaxAlt()
    {
        return $this->maxAlt;
    }

    public function setMaxAlt($maxAlt):void
    {
        $this->maxAlt = $maxAlt;
    }

    public function getWheels()
    {
        return $this->nbwheels;
    }

}

