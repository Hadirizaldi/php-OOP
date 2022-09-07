<?php

class Manager 
{
    public string $name;
    public string $title;

    public function __construct(string $name = "", string $title='Manager')
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(?string $name): void
    {
        echo "Hi, $name my manager name is $this->name \n";
    } 
}

class vicePresident extends Manager 
{
    public function __construct(string $name="")
    {
        parent::__construct($name, "VicePresident");
    }

    function sayHello(?string $name): void
    {
        echo "Hi, $name my VP name is  $this->name \n";
    }
}