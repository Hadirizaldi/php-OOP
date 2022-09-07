<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = 'Aldi';
$manager->sayHello('Aji');

$vp = new vicePresident();
$vp->name = 'Mayang';
$vp->sayHello('Joko');