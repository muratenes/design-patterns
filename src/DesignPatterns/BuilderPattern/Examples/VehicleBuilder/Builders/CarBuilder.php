<?php

class CarBuilder implements Builder
{

    private $car;

    public function addDoors(): Builder
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());

        return $this;
    }

    public function addEngine(): Builder
    {
        $this->car->setPart('engine', new Engine());

        return $this;
    }

    public function addWheel(): Builder
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());

        return $this;
    }

    public function createVehicle(): Builder
    {
        $this->car = new Car();

        return $this;
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}