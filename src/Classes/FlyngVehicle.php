<?php
abstract class FlyngVehicle extends AbstractVehicle{

    protected $maxAlt;

    public function __construct(string $name, string $fuel, int $maxAlt, ?int $kms=0){
        parent::__construct($name, $fuel, $kms);
        $this->maxAlt=$maxAlt;
    }

    public function move(int $km): void
    {
        $this->kms += $km;
        echo "<p>{$this->name} : Je vole à $km </p>";
        echo "<p>{$this->makeNoise()}</p>";
    }
    /**
     * @return int
     */
    public function getMaxAlt(): int
    {
        return $this->maxAlt;
    }
    /**
     * @param int $maxAlt
     */
    public function setMaxAlt(int $maxAlt): void
    {
        $this->maxAlt=$maxAlt;
    }
}