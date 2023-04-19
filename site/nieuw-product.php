<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>nieuw product invoeren</title>
</head>

<body>
    <h1>nieuw product maken </h1>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-groep">
            <label for="NaamProduct">naam product</label>
            <input type="text" name="NaamProduct" id="NaamProduct">
        </div>
        <div class="form-groep">
            <label for="catogorieProduct">catogorie product</label>
            <input type="text" name="catogorieProduct" id="catogorieProduct">
        </div>
        <div class="form-groep">
            <label for="prijsProduct">prijs product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">

        </div>
        <div class="form-groep">
            <label for="merkProduct">merk product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>








        <button type="submit">maak nieuw product </button>
    </form>
</body>

</html>