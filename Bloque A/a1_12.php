<?php
$username = 'Ivy';// Variable to hold username
//cambio el nombre
$username = 'Sara';
$greeting = 'Hello, ' . $username . '.';// Greeting is 'Hello' + username
$greeting = "Hi $username";  //cambio el saludo
$offer = [
    'item'
    => 'Chocolate',
    'qty'
    => 5,
    'price'
    => 5,
    'discount' => 4,
];
//cambio la cantidad

//cambio el precio
$offer['qty'] = 3;
$offer['price'] = 6;
$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving
    = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Multi-buy Offer</h2>
    <p><?= $greeting ?></p>
    <p class="sticker">Save $<?= $saving ?></p>
    <p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?>
        for $<?= $offer_price ?><br> (usual price $<?= $usual_price ?>)</p>
</body>

</html>