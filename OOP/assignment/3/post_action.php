<?php include "Person.php";

if ( isset( $_POST['submit'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ( !empty( $name ) && !empty( $email ) ) {
        $person_1 = new Person();
        $person_1->setName( $name );
        $person_1->setEmail( $email );
        $person_1->person_details();
    }
}

?>