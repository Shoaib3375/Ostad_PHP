<?php
// Start the session and get the user's name from the cookie
session_start();
$name = isset( $_SESSION["name"] ) ? $_SESSION["name"] : "";
if ( !$name && isset( $_COOKIE["name"] ) ) {
    $name = $_COOKIE["name"];
}

// Read the CSV file and build an array of users
$users = array();
if (  ( $fp = fopen( "users.csv", "r" ) ) !== false ) {
    while (  ( $data = fgetcsv( $fp ) ) !== false ) {
        $users[] = $data;
    }
    fclose( $fp );
}
?>