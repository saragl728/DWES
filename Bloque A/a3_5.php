<?php
$tax_rate = 0.2;
$global_discount = 0.1;
function calculate_running_total($price, $quantity)
{
    global $tax_rate;
    global $global_discount;    //añado la variable global_discount
    static $running_total = 0;
    $total = $price * $quantity * (1 - $global_discount);
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Global and Static Variables</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Running total</th>
        </tr>
        <tr>
            <td>Mints:</td>
            <td>$2</td>
            <td>5</td>
            <td>$<?= calculate_running_total(2, 5) ?></td>
        </tr>
        <tr>
            <td>Toffee:</td>
            <td>$3</td>
            <td>5</td>
            <td>$<?= calculate_running_total(3, 5) ?></td>
        </tr>
        <tr>
            <td>Fudge:</td>
            <td>$5</td>
            <td>4</td>
            <td>$<?= calculate_running_total(5, 4) ?></td>
        </tr>
        <!--añado productos-->
        <tr>
            <td>Juna Candy:</td>
            <td>$6</td>
            <td>2</td>
            <td>$<?= calculate_running_total(6, 2) ?></td>
        </tr>
        <tr>
            <td>Afa Popcorn:</td>
            <td>$3</td>
            <td>6</td>
            <td>$<?= calculate_running_total(3, 6) ?></td>
        </tr>
    </table>
</body>

</html>