<?php
define('Ok',123);

class MyClass{
    const CITY = 'Dhaka';
    function sayHi(){
        echo "hi from ".$this::CITY;
    }
}
$m = new MyClass();
$m->sayHi();
//echo MyClass::CITY;