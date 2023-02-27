<?php
class Human{
    public $name;
    function sayHi(){
        echo "salam";
    }
    function getName(){
        echo "ll {$this->name}";
    }
}

$h1 = new Human();
$h1->name = "Rubel";
$h1->getName();