<?php

require_once "data/Car.php";

use Data\{Car, Avanza};

$car = new Avanza();
echo $car->drive();
echo $car->getTire();
