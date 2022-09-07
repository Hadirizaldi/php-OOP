<?php

class Person {
    const AUTHOR = "Hadi Rizaldi R";

    public string $name;
    public ?string $address = null ;
    public string $country = "Indonesia" ;

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name) 
    {
        if (is_null($name)){
            echo "Hi, My name is $this->name \n";
        } 
        else {
            echo "Hello $name, My name is $this->name \n";
        }
    }

    function info() 
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed \n";
    }
}