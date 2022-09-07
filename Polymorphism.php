<?php

require_once "data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Aldi");
var_dump($company);
$company->programmer = new BackEndProgrammer("Mayang");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Dito");
var_dump($company);

// function 
sayHello(new Programmer("Aldi"));
sayHello(new BackEndProgrammer("Aldi"));
sayHello(new FrontEndProgrammer("Aldi"));
