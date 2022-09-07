<?php

require_once 'data/Person.php';

$person = new person('Hadi', 'Banyuwangi');

echo "Name: {$person->name}\n";
echo "Address: {$person->address}\n";
echo "Country: {$person->country}\n";