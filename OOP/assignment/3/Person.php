<?php

class Person {

    public $name;
    public $email;

    function __construct( $name = "", $email = "" ) {
        $this->name = $name;
        $this->email = $email;
    }
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
    function person_details() {
        echo "Person name is : {$this->getName()} <br>";
        echo "Person email is : {$this->getEmail()} <br>";
    }
}
// task -02
// $person_1 = new Person();
// $person_1->set_name("Your Name");
// $person_1->set_email("Your Email");
// $person_1->person_details();

?>