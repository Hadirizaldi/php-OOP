<?php

abstract class HelloWorld
{
    abstract function sayHello(): void;
}

$helloWorld = new class extends HelloWorld
{
    function sayHello(): void
    {
        echo "hello guys";
    }
};


$helloWorld->sayHello();
