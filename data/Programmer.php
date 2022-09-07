<?php

class Programmer
{
    public string $name;

    public function __construct(string $name="")
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer
{}

class FrontEndProgrammer extends Programmer
{}

class Company 
{
    public Programmer $programmer;
}

function sayHello(Programmer $programmer) : void
{
    if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEndprogrammer $programmer->name" . PHP_EOL;
    }
    else if($programmer instanceof BackEndProgrammer) {
        echo "Hello BackEndprogrammer $programmer->name" . PHP_EOL;
    }
    else if ($programmer instanceof Programmer){
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
}