<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipments\OverAirShipment;
use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipments\OverLandShipment;
use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment\Shipments\OverSeaShipment;

class Index
{
    public function index()
    {
        $shipments = [
            (new OverSeaShipment())->setID(1)
                ->setName('#Sea1')
                ->setWeight(100),
            (new OverAirShipment())->setID(2)
                ->setName('#Air1')
                ->setWeight(50),
            (new OverLandShipment())->setID(3)
                ->setName('#Land1')
                ->setWeight(200)
        ];

        foreach ($shipments as $shipment) {
            $cost = $shipment->calculateCost();
            echo "cost : " . $cost;
        }
    }
}