<?php
class Supercopter extends FlyngVehicle
{
    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $maxAlt = 9000)
    {
        parent::__construct($name, $fuel, $maxAlt, $kms);
    }
    public function makeNoise(): string
    {
        return 'fiuuuuuuuuuuuuuuuuuuuu';
    }
}