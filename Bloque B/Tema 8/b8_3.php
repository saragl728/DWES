<?php

$fechaIni = new DateTime();
$fechaIni->setDate(2024, 10, 16);

$fec2 = clone $fechaIni;
$fec2->setTime(15, 30, 0);

$fec3 = clone $fec2;

$fec3->setTimestamp(1734246765);

$fec4 = clone $fec3;

$fec4->modify('+3 months 15 min');

?>
<html>

<head>
    <title>Ejercicio 8-3</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <section class="page">
        <p>Fecha del evento <b><?= $fechaIni->format('Y-m-d'); ?></b></p>
        <p>Fecha del evento <b><?= $fec2->format('Y-m-d H:i:s'); ?></b></p>
        <p>Fecha del evento <b><?= $fec3->format('Y-m-d H:i:s'); ?></b></p>
        <p>Fecha del evento <b><?= $fec4->format('Y-m-d H:i:s'); ?></b></p>
    </section>

</body>

</html>