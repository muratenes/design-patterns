<?php

class TruckBuilder implements Builder
{

    private $truck;

    public function createVehicle(): Builder
    {
        $this->truck = new Truck();

        return $this;
    }

    public function addWheel(): Builder
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());

        return $this;
    }

    public function addEngine(): Builder
    {
        $this->truck->setPart('carEngine', new Engine());

        return $this;
    }

    public function addDoors(): Builder
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());

        return $this;
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}