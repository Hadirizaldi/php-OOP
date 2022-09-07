<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();

echo $mathHelper::$name . PHP_EOL;

// sum function

$result = MathHelper::sum([2, 5, 8]);
echo $result . PHP_EOL;
