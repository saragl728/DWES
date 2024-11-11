<?php
$products = ['Toffee' => 2.99, 'Mints' => 1.99, 'Fudge' => 3.49, 'Chocolate' => 2, 'Coffee Candy' => 1.19]; //añado dos elementos al array indexado
?>
<!DOCTYPE html>
<html>

<head>
    <title>Loop For each</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Price list</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><? $price ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>