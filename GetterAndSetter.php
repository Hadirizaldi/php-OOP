<?php

require_once "data/Category.php";

use Data\Category;

$category = new Category();
$category->setName("Car");
$category->setExpensive(true);


$category->setName("");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
