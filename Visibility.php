<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

echo "ProductName  : {$product->getName()}" . PHP_EOL;
echo "ProductPrice : {$product->getPrice()}" . PHP_EOL;


$dummy = new ProductDummy('dummy', 10000);
$dummy->info();