<?php

require 'kernel.php';

$apiBuilder = new ApiV4Builder();
$client = (new Director())->build($apiBuilder);
echo "API V4" . PHP_EOL . ($client). PHP_EOL;


$apiBuilder = new ApiV5Builder();
$client = (new Director())->build($apiBuilder);
echo "API V5" . PHP_EOL . ($client). PHP_EOL;


$webBuilder = new WebBuilder();
$client = (new Director())->build($webBuilder);
echo "WEB:" . PHP_EOL . ($client). PHP_EOL;