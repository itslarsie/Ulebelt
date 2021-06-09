<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ulebelt';

$conn = new mysqli( $hostname, $username, $password, $database);
if( $conn->connect_errno){
    echo "verbinding met de database mislukt";
    exit();
}

?>