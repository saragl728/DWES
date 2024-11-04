<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
?>
<html>
<head>
<title>Echo Shorthand</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Shopping Cart</h2>
<?php
    //intercambio los valores de items y cost
    $aux = $items   //variable auxiliar que necesitaremos
    $items = $cost  //le doy a items el valor de cost
    $cost = $aux    //le doy a cost el valor inicial de items
?>
<p>Items: <?= $items ?></p>
<p>Cost per pack: <?=$cost ?></p>
<p>Subtotal: <?=$subtotal ?></p>
<p>Tax: <?=$tax ?></p>
<p>Total: <?=$total ?></p>
</body>
</html>
