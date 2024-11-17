<?php
$stock = 25;
function get_stock_message($stock)
{
    if ($stock > 10) {
        return 'Good availability';
    }
    //hago que diga que hay 10 productos cuando hay 10 productos
    if ($stock == 10) {
        return 'Exactly 10 products in stock';
    }
    if ($stock > 0 && $stock < 10) {
        return 'Low stock';
    }
    return 'Out of stock';
}

$productos_con_stock = ["Caramel Peanuts" => 14, "Turrolate" => 4, "Juna Candy" => 0, "Gum" => 10]; //creo un array asociativo de productos con su stock
?>
<!DOCTYPE html>
<html>

<head>
    <title>Multiple Return Statements</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p><?= get_stock_message($stock) ?></p>
    <table>
        <tr>
            <th>Product</th>
            <th>Stock status</th>
        </tr>
        <?php foreach ($productos_con_stock as $producto => $estoc) { ?>
            <tr>
                <td><?= $producto ?></td>
                <td><?= $estoc ?></td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>