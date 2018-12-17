<?php
namespace App;
require 'CockException.php';

//Testing my cocks
try {
    $delta = rand(0, 100);
    if ($delta > 50)
        throw new CockException("Holy shit!", 5);
    else
        throw new CockException("Maybe the cucco!?", 1);
} catch (CockException $e) {
    echo $e->getMessage() . PHP_EOL;
}