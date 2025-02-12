<?php

//zonas horarias
$tz_Roma = new DateTimeZone('Europe/Rome');
$tz_NuevaYork = new DateTimeZone('America/New_York');
$tz_Tokyo = new DateTimeZone('Asia/Tokyo');

$fechaRoma = new DateTime('now', $tz_Roma);
$fechaNuevaYork = new DateTime('now', $tz_NuevaYork);
$fechaTokio = new DateTime('now', $tz_Tokyo);

?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 8-6</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <section class="page">
        <p><?= $tz_Roma->getName() ?>: <b><?= $fechaRoma->format('Y-m-d H:i:s') ?></b></p>
        <p><?= $tz_NuevaYork->getName() ?>: <b><?= $fechaNuevaYork->format('Y-m-d H:i:s') ?></b></p>
        <p><?= $tz_Tokyo->getName() ?>: <b><?= $fechaTokio->format('Y-m-d H:i:s') ?></b></p>
    </section>
</body>

</html>