<?php setlocale(LC_TIME, 'es_ES.UTF-8'); ?>
<?php
$fechaInicio = new DateTime('2025-01-02 13:00:00');
$fin = new DateTime('2025-06-02 13:00:00');
$intervalo = new DateInterval('P5DT3H');


$periodo = new DatePeriod($fechaInicio, $intervalo, $fin);

$duracion = $fechaInicio->diff($fin);

?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 8-5</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <section class="page">
        <p>Fecha de inicio: <?= $fechaInicio->format('Y-m-d H:i:s') ?></p>
        <p>
            <?php foreach ($periodo as $evento) { ?>
                Otra fecha: <b><?= $evento->format('Y-m-d H:i:s') ?></b><br>
            <?php } ?>
        </p>

        <p>Duración del evento: <?= $duracion->format('%y años %m meses %d días %h horas %i minutos %s segundos') ?></p>

    </section>
</body>

</html>