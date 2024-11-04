<?php
$item = 'Chocolate';
$stock = 5;
$wanted = 8;
$canBuy = $($stock <= $wanted);
?>
<!DOCTYPE html>
<html>
<head>
<title>Multidimensional Arrays</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Shopping Cart</h2>
<?php
    //intercambio los valores
    $aux = $stock
    $stock = $wanted
    $wanted = $aux
?>
<p>Items: <?= $items ?></p>
<p>Stock: <?=$stock ?></p>
<p>Wanted: <?=$wanted ?></p>
<p>Can buy: <??$canBuy ?></p>
</body>
</html>
