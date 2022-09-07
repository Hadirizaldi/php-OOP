<?php

require_once 'data/Person.php';

//untuk variable tidak bisa diubah

const APP_VERSION = "1.0.0";

echo APP_VERSION . PHP_EOL;

$author = Person::AUTHOR;
echo $author;