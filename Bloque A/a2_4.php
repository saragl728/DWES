<?php
$stock = 0; //cambio el valor de la variable stock
$ordered = 3;

if ($stock > 0) {
    $message = 'In stock';
} elseif ($ordered > 0) {
    $message = 'Coming soon';
} else {
    $message = 'Sold out';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ternary Operator</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>

</html>