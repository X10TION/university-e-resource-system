<?php 
// database connection for all account

$db_HOST = "localhost";
$db_user = "root";
$db_password = "";
$dd_name = "mau_learn2020";


// create connections 
$connection = new mysqli($db_HOST,$db_user,$db_password,$dd_name);

    if ($connection->connect_error){
       die(header("location: https://localhost/nbdco.org/error.php"));
    }
