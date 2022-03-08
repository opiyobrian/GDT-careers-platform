<?php
$host = "localhost";
$user = "root";
$pass ="";
$db_name = "brian";

$conn = mysqli_connect($host, $user, $pass,$db_name);

if(!isset($conn)){
    die("db connection failed");
}