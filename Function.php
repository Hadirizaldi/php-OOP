<?php

require_once 'data/Person.php';

$aldo = new Person('Aldo', 'Jakarta');

$aldo->sayHello("Budi");


$joko = new Person('Joko', '');
$joko->name = "Joko";

$joko->sayHello(null);

$joko->info();
$aldo->info();