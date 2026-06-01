<?php

$host = "localhost";
$user = "root";
$password = "Olamide010404";
$database = "school_db";
$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Database Connection Failed");
}

?>