<?php

$email = $_POST["email"];
$firstname  = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$password  = $_POST["password"];
$address = $_POST["address"];
$city  = $_POST["city"];
$role = $_POST["role"];


require "database.php"; 

$sql = "INSERT INTO users (email, firstname, lastname, password, address,city,role) 

VALUES('$email','$firstname','$lastname','$password','$address','$city','$role')";

if (mysqli_query($conn, $sql))
{
    header("location: nieuw-gebruiker.php");
}
