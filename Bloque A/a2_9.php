<?php
$price = 2.99;  //cambio el precio
?>
<!DOCTYPE html>
<html>

<head>
    <title>for Loop</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
        for ($i = 1; $i <= 20; $i++) {  //hago que se repita 20 veces
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>
</body>

</html>