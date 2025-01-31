<?php
$day = 'Wednesday'; //cambio el valor de offer
switch ($day) {
    case 'Monday':
        $offer = '20% off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    case 'Wednesday':   //añado una opción para el valor nuevo
        $offer = '5% off everything';
        break;
    default:
        $offer = 'Buy three packs, get one free';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>switch Statement</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day; ?></h2>
    <p><?= $offer ?></p>
</body>

</html>