<?php

$dbname = "web";
$host = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn){
    die("Database Error : " .mysqli_connect_error());
}
?>