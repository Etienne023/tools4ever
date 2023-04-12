<?php
require "database.php";

$id = $_GET["tool_id"];

$sql = "SELECT * from tools where tool_id = $id";

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
    <table>
        <tr>
            <th>name</th>
            <th>Category</th>
            <th>Price</th>
            <th>brand</th>
        </tr>
        <tr>
            <td><?php echo $product["tool_name"] ?></td>
            <td><?php echo $product["tool_category"] ?></td>
            <td><?php echo $product["tool_price"] ?></td>
            <td><?php echo $product["tool_brand"] ?></td>

        </tr>
    </table>
</body>

</html>