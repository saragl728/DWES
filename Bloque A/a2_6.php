<?php
$day = 'Wednesday'; //cambio el valor
$offer = match ($day) {
    'Monday'
    => '20% off chocolates',
    'Tuesday' => '20% off gum', //añado una opción
    'Saturday', 'Sunday' => '20% off mints',
    /*default
    => '10% off your entire order',*/   //quito la opción por defecto
};
?>
<!DOCTYPE html>
<html>

<head>
    <title>match Expression</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>

</html>