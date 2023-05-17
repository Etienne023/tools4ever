<?php

$email = $_POST["email"];
$firstname  = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$password  = $_POST["password"];
$address = $_POST["address"];
$city  = $_POST["city"];
$role = $_POST["role"];

$password_hash = password_hash($password,PASSWORD_DEFAULT);


require "database.php"; 

$sql = "INSERT INTO users (email, firstname, lastname, password, address,city,role) 

VALUES('$email','$firstname','$lastname','$password_hash','$address','$city','$role')";

if (mysqli_query($conn, $sql))
{
    header("location: nieuw-gebruiker.php");
}
