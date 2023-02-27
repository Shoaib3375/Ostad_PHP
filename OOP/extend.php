<?php
abstract class OurClass {
    function sayHi() {
        echo "Hi";
    }
    abstract function eat();
}
class myClass extends OurClass {
    function eat() {
        echo "i am eating";
    }

}
$mc = new myClass();
$mc->eat();