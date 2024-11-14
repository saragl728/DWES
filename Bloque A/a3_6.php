<?php
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'au' => 1.3,    //añado dólares australianos y canadienses
    'cd' => 1.25
];

$productos = ["Bottomless Peanut Bag" => 15.2, "Cotton Candy" => 4.8, "Frogurt" => 6.66];   //creo un array asociativo de productos con sus precios

function calculate_prices($usd, $exchange_rates)
{
    $prices = [
        'pound' => $usd * $exchange_rates['uk'],
        'euro' => $usd * $exchange_rates['eu'],
        'yen' => $usd * $exchange_rates['jp'],
        'aud' => $usd * $exchange_rates['au'],
        'cad' => $usd * $exchange_rates['cd'],
    ];
    return $prices;
}

$preciosConvertidos = ["Bottomless Peanut Bag" => [], "Cotton Candy" => [], "Frogurt" => []];
foreach ($productos as $prod => $precio) {
    $preciosConvertidos[] = calculate_prices($precio, $rates);
}

function formatea_precio($precio)
{
    return round($precio, 2);   //uso round para redondear para que tenga 2 decimales
}
$global_prices = calculate_prices($us_price, $rates);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Functions with Multiple Values</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>US $<?= $us_price ?></p>
    <p>(UK &pound; <?= $global_prices['pound'] ?> |
        EU &euro; <?= $global_prices['euro'] ?> |
        JP &yen; <?= $global_prices['yen'] ?>) |
        AUD $; <?= $global_prices['aud'] ?> |
        CAD $<?= $global_prices['cad'] ?>
    </p>
    <table>
        <th>
        <td>Bottomless Peanut Bag</td>
        <td>Cotton Candy</td>
        <td>Frogurt</td>
        </th>
        <tbody>
            <!--fila con los precio originales en dólares-->
            <tr>
                <td><?= $productos['Bottomless Peanut Bag'] ?> $</td>
                <td><?= $productos['Cotton Candy'] ?> $</td>
                <td><?= $productos['Frogurt'] ?> $</td>
            </tr>

            <tr>
                <td><?= formatea_precio($preciosConvertidos['Bottomless Peanut Bag'[0]]) ?> &pound;</td>
                <td><?= formatea_precio($preciosConvertidos['Cotton Candy'[0]]) ?> &pound;</td>
                <td><?= formatea_precio($preciosConvertidos['Frogurt'[0]]) ?> &pound;</td>
            </tr>

            <tr>
                <td><?= formatea_precio($preciosConvertidos['Bottomless Peanut Bag'[1]]) ?> &euro;</td>
                <td><?= formatea_precio($preciosConvertidos['Cotton Candy'[1]]) ?> &euro;</td>
                <td><?= formatea_precio($preciosConvertidos['Frogurt'[1]]) ?> &euro;</td>
            </tr>

            <tr>
                <td><?= formatea_precio($preciosConvertidos['Bottomless Peanut Bag'[2]]) ?> &yen;</td>
                <td><?= formatea_precio($preciosConvertidos['Cotton Candy'[2]]) ?> &yen;</td>
                <td><?= formatea_precio($preciosConvertidos['Frogurt'[2]]) ?> &yen;</td>
            </tr>

            <tr>
                <td><?= formatea_precio($preciosConvertidos['Bottomless Peanut Bag'[3]]) ?> AUD $</td>
                <td><?= formatea_precio($preciosConvertidos['Cotton Candy'[3]]) ?> AUD $</td>
                <td><?= formatea_precio($preciosConvertidos['Frogurt'[3]]) ?> AUD $</td>
            </tr>

            <tr>
                <td><?= formatea_precio($preciosConvertidos['Bottomless Peanut Bag'[4]]) ?> CAD $</td>
                <td><?= formatea_precio($preciosConvertidos['Cotton Candy'[4]]) ?> CAD $</td>
                <td><?= formatea_precio($preciosConvertidos['Frogurt'[4]]) ?> CAD $</td>
            </tr>
        </tbody>
    </table>
</body>

</html>