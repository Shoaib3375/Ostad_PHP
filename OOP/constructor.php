<?php

class Human {
    public string $name;
    public int $age;

    public function __construct( $personName, $personAge = 0 ) {
        // echo "New Human Object Is Created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(): void {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(): void {
        if ( $this->age ) {
            echo "My name is $this->name & I'am $this->age years old\n";
        } else {
            echo "My name is $this->name, I don't know how old I am";
        }
    }
}
$h1 = new Human( "Rubel", 33 );
$h2 = new Human( "Islam", 33 );
$h3 = new Human( "Shoaib" );
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();