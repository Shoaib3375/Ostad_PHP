<?php
// Task 2: Basic OOP in PHP
class Person {
    private $name;
    private $email;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$person = new Person();

$person->setName( "Shoaib Islam" );
$person->setEmail( "mdshoaiburislam@gmail.com" );

// display the name and email properties on the webpage
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail();
?>