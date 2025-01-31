<?php
$name = 'Ivy';
// Store the user's name
$greeting = 'Hello';
if ($name) {
    $greeting = 'Welcome back, ' . $name;
}
$product = 'Lollipop';
$cost = 10; //cambio el valor de cost
for ($i = 1; $i <= 20; $i++) {  //hago que se ejecute 20 veces
    $subtotal
        = $cost * $i;
    $discount
        = ($subtotal / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}
?>
<?php require 'includes/header.php'; ?>
<p><?= $greeting ?></p>
<h2><?= $product ?> Discounts</h2>
<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <?php foreach ($totals as $quantity => $price) { ?>
        <tr>
            <td>
                <?= $quantity ?>
                pack<?= ($quantity === 1) ? '' : 's'; ?>
            </td>
            <td>
                $<?= $price ?>
            </td>
        </tr>
    <?php } ?>
</table>
<?php include 'includes/footer.php' ?>