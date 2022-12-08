<?php

require 'kernel.php';

$truckBuilder = new TruckBuilder();
$newVehicle = (new Director())->build($truckBuilder);

print_r($newVehicle);