<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipments;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipment;

class OverSeaShipment extends Shipment
{

    public function calculateCost(): float
    {
        return $this->getWeight() * 6.4;
    }
}