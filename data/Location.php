<?php

namespace Data;

use Locale;

abstract class Location 
{
public string $name;
}

class City extends Location 
{}

class Country extends Location 
{}

class Province extends Location 
{}