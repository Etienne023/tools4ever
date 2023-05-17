<?php

require 'database.php';

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
$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/store.css">
</head>

<body>
    <form action="verwerk-zoek.php" method="post">
        <section class="search">
            <label for="">zoek</label>
            <input type="text" name="zoekveld" id="">
            <button type="submit">zoek!</button>
    </form>
    </section>


    <div class="product">
        <?php foreach ($all_products as $product) : ?>
            <div class="ja">
                <a href="tools-detail.php?tool_id=<?php echo $product['tool_id'] ?>">
                    <h3><?php echo $product["tool_name"] ?></h3>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>