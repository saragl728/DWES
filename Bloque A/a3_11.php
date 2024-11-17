<?php
function calculate_cost($cost, $quantity, $discount = 0, $tax = 20, $shipping = 0)
{
    $cost = $cost * $quantity;
    $tax = $cost * ($tax / 100);
    return ($cost + $tax) - $discount + $shipping;
}

//array con los productos
$productos = [["Dark Chocolate", 5, 10, 5, 10, 3], ["Milk Chocolate", 3, 4, 0, 8, 2], ["White Chocolate", 4, 14, 20, 0, 4], ["Mint Chocolate", 4.5, 8, 0, 0, 5]];
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
    <p>Dark chocolate $<?= calculate_cost(quantity: 10, cost: 5, tax: 5, discount: 2) ?></p>
    <p>Milk chocolate $<?= calculate_cost(quantity: 10, cost: 5, tax: 5) ?></p>
    <p>White chocolate $<?= calculate_cost(5, 10, tax: 5) ?></p>
    <p>Mint chocolate $<?= calculate_cost(5.6, 4, 0, 3.1)?></p>

    <table>
        <tr>
            <th>Products</th>
            <th>Final cost</th>
        </tr>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <tr><?= $productos[$i][0] ?></tr>
            <tr><?= calculate_cost($productos[$i][1], $productos[$i][2], $productos[$i][3], $productos[$i][4], $productos[$i][5]) ?></tr>
        <?php } ?>
    </table>
</body>

</html>