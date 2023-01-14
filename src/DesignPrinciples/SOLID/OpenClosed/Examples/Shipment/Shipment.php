<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shipment;

abstract class Shipment
{
    public int $ID;
    public string $name;
    public float $weight;

    public abstract function calculateCost(): float;

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return Shipment
     */
    public function setID(int $ID): Shipment
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Shipment
     */
    public function setName(string $name): Shipment
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Shipment
     */
    public function setWeight(float $weight): Shipment
    {
        $this->weight = $weight;
        return $this;
    }
}