<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Aldi";
$manager->sayHello('Mayang');

$vp = new vicePresident();
$vp->name= "Aji";
$vp->sayHello("Putri");

var_dump($vp);