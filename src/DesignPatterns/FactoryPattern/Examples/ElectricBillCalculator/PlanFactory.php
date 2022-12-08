<?php

class PlanFactory
{
    private string $plan;

    const ALLOWED_PLANS = [
        'commercial',
        'domestic',
        'basic'
    ];

    public function __construct(string $plan)
    {
        if (!in_array($plan, self::ALLOWED_PLANS)) {
            throw new \Exception($plan . " plan  not valid,allowed plans :" . implode(',', self::ALLOWED_PLANS));
        }
        $this->plan = $plan;
    }

    public function getPlan()
    {
        switch ($this->plan) {
            case 'commercial':
                return new Commercial();
            case 'domestic':
                return new Domestic();
            default:
                return new Basic();
        }
    }

    public function calculate(float $unit)
    {
        return $this->getPlan()->calculateInvoice($unit);
    }
}