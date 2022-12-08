<?php

class Director
{
    public function build(Builder $builder): Vehicle
    {
        return $builder
            ->createVehicle()
            ->addWheel()
            ->addEngine()
            ->addDoors()
            ->getVehicle();
    }
}