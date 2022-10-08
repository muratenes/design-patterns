<?php

interface Builder
{
    public function createVehicle(): self;

    public function addWheel(): self;

    public function addEngine(): self;

    public function addDoors(): self;

    public function getVehicle(): Vehicle;
}