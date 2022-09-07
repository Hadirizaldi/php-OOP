<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\one\Conflict;
use function Helper\helpMe as help;
use const Helper\APPLICATION as app;

$conflict1 = new Conflict();

help();

echo app . PHP_EOL;