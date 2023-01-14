<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipments;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipment;

class OverLandShipment extends Shipment
{

    public function calculateCost(): float
    {
        return $this->getWeight() * 2;
    }
}