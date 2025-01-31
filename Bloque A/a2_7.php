<?php
$counter = 1;
$packs = 10;   //cambio el número de paquetes
$price = 1.99;
?>
<!DOCTYPE html>
<html>

<head>
    <title>while Loop</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
        while ($counter < $packs) { //cambio el condicional
            echo $counter;
            echo ' packs cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>
</body>

</html>