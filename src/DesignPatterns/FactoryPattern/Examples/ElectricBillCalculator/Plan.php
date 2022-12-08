<?php

abstract class Plan
{
    public abstract function getRate();

    public function calculateInvoice(float $unit): float
    {
        return $this->getRate() * $unit;
    }
}