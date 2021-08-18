<?php

require __DIR__.'/../vendor/autoload.php';

use Src\CalculateNumber;

$manager = new CalculateNumber();
$result = $manager->start();

foreach ($result as $item) {
    echo "$item[0] -> $item[1]" . PHP_EOL;
}
