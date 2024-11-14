<?php
declare(strict_types=1);
$price = 4.5;   //estoy usando php 8, así que pongo 4.5
$quantity = 3;
function calculate_total(int|float $price, int|float $quantity): int|float  //hago que admita y devuelva tanto enteros como float
{
    return $price * $quantity;
}
$total = calculate_total($price, $quantity);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Return Type Declarations</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= $total ?></p>
</body>

</html>