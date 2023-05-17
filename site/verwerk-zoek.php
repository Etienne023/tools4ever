<?php

$zoekterm = $_POST["zoekveld"];

if(empty($zoekterm)){
    header("location: index.php");
    exit;
}

require 'database.php';

$sql = "SELECT * FROM tools where tool_name like '%$zoekterm%' " ;

$result = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php foreach($all_products as $product): ?>
    <p><?php echo $product["tool_name"]; ?></p>
    <?php endforeach?>
 </body>
 </html>


