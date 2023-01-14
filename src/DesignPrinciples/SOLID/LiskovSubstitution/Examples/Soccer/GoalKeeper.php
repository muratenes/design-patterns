<?php

namespace App\DesignPrinciples\SOLID\LiskovSubstitution\Examples\Soccer;

class GoalKeeper extends Player implements KeepInterface
{

    public function keepTheBall()
    {
        // keep the ball goalkeeper !!
    }
}