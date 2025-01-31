<?php
$usuario = 'Sara';
$saludo = "Hola, $usuario";
$offer = [['objeto' => 'Libro Espada Sellos', 'precio' => 10, 'descontado' => 7.8], ['objeto' => 'Libro Rocas Luz y Oscuridad', 'precio' => 12, 'descontado' => 9.4]];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Librería</title>
    <style>
        body {
            background-image: linear-gradient(#fea, #add);
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Librería</h1>
    <p><?= $saludo ?></p>

    <p>Descuento en <?= $offer[0]['objeto'] ?></p>
    <p>De <?= $offer[0]['precio'] ?>€ a <?= $offer[0]['descontado'] ?>€</p>
    <p>Ahorra <?php echo $offer[0]['precio'] - $offer[0]['descontado'] ?></p>

    <p>Descuento en <?= $offer[1]['objeto'] ?></p>
    <p>De <?= $offer[1]['precio'] ?>€ a <?= $offer[1]['descontado'] ?>€</p>
    <p>Ahorra <?php echo $offer[1]['precio'] - $offer[1]['descontado'] ?></p>
</body>

</html>