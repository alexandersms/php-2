<?php

abstract class AbstractVehicle {
    protected $brand;
    protected $nbWheels;
    protected $motor;
    protected $kilomoters;

    public function __construct(string $brand, string $motor, string $nbWheels){
        $this->kilomoters = 0;
        $this->brand = $brand;
        $this->motor = $motor;
        $this->nbwheels = $nbWheels;
    }
    
    public abstract function go(int $km): void;
        //$this->kilomoters += $km;
    

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
    /**
     * @return string
     */
    public function getMotor(): string
    {
        return $this->motor;
    }
    /**
     * @param string $motor
     */
    public function setMotor(string $motor): void
    {
        $this->motor = $motor;
    }
    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    /**
     * @return int
     */
    public function getKilometers(): int
    {
        return $this->kilometers;
    }
    /**
     * @param int $kilometers
     */
    public function setKilometers(int $kilometers): void
    {
        $this->kilometers = $kilometers;
    }
}


