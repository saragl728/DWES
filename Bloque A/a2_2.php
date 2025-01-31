<?php
$stock = 0; //cambio el valor de stock a 0
if ($stock > 0) {
    $message = 'In Stock';
} else {
    $message = 'More stock coming soon';    //cambio el mensaje
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>if else Statement</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>

</html>