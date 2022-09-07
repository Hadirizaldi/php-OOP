<?php

$array = [
    "firstName" => 'Hadi',
    "middleName" => 'Rizaldi',
    "lastName" => "Rahmanto"
];

$object = (object)$array;
var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$backArray = (array) $object;
var_dump($backArray);
