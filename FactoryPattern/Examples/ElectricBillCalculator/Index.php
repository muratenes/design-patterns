<?php

require 'kernel.php';


echo (new PlanFactory('commercial'))->calculate(100) . PHP_EOL;
echo (new PlanFactory('commercial'))->getPlan()->getRate() . PHP_EOL;
echo (new PlanFactory('domestic'))->calculate(100);