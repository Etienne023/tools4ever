<?php

require "database.php";

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$producten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <?php foreach ($producten as $product) : ?>
                <td><?php echo $product["tool_name"] ?></td>
                <td><?php echo $product["tool_category"] ?></td>
                <td><?php echo $product["tool_price"] ?></td>
                <td><?php echo $product["tool_brand"] ?></td>
             
        </tr>
    <?php endforeach ?>
    </table>

</body>

</html>