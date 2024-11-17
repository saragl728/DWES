<?php
//incluyo un parámetro opcional de impuestos
function calculate_cost($cost, $quantity, $discount = 0, $tax = 0)  //los impuestos van sobre 1
{
    $cost *= $quantity * (1 + $tax);
    return $cost - $discount;
}

//creo una array bidimensional con los productos
$productos = [["Dark Chocolate", 5, 10, 5, 0.1], ["Milk Chocolate", 3, 4, 0, 0.08], ["White Chocolate", 4, 14, 20, 0], ["Almond Chocolate", 4.5, 8, 0, 0]];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Dark chocolate $<?= calculate_cost(5, 10, 5) ?></p>
    <p>Milk chocolate $<?= calculate_cost(3, 4, 0, 0.08) ?></p>
    <p>White chocolate $<?= calculate_cost(4, 15, 20) ?></p>
    <p>Almond chocolate $<?= calculate_cost(4.5, 8) ?></p>
    <table>
        <tr>
            <th>Products</th>
            <th>Final cost</th>
        </tr>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <tr><?= $productos[$i][0] ?></tr>
            <tr><?= calculate_cost($productos[$i][1], $productos[$i][2], $productos[$i][3], $productos[$i][4]) ?></tr>
        <?php } ?>
    </table>
</body>

</html>