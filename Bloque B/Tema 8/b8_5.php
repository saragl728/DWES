<?php
$fechaInicio = new DateTime('2025-01-02 13:00:00');
$intervalo = new DateInterval('P5D');   //intervalo de 5 días
$fin = new DateTime('2025-06-02 13:00:00');

$periodo = new DatePeriod($inicio, $intervalo, $fin);

$duracion = $inicio->diff($fin);
/*En un sistema de gestión de eventos, se necesita permitir que los administradores generen
eventos recurrentes (por ejemplo, una reunión que ocurre cada semana durante 2 meses).
El sistema debe poder:
1. Crear un evento inicial con una fecha y hora dadas.
2. Definir un intervalo de repetición, como "cada semana" o "cada 15 días".
3. Generar y mostrar todas las fechas futuras del evento durante un periodo determinado
(por ejemplo, los próximos 2 meses).
4. Mostrar la duración de cada evento y formatear la fecha de manera clara y
comprensible para los usuarios.
Requisitos:
1. El administrador introduce la fecha y hora inicial del evento y la duración de este en
días, horas y minutos.
2. Se define un intervalo de repetición, por ejemplo, 7 días (una vez por semana).
3. Se genera una lista de todas las fechas del evento durante un periodo de 2 meses.
4. Se muestra cada evento en un formato legible y se calcula la duración entre el inicio y
el fin de cada uno.
*/
?>
<html>

<head>
    <title>Ejercicio 8-5</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <div class="page">
        <p>Fecha de inicio: <?= $fechaInicio->format('Y-m-d H:i:s') ?></p>
        <?php foreach ($periodo as $evento) { ?>

            <?= $evento->format('Y-m-d H:i:s') ?><br>

        <?php } ?>
        <p>Duración del evento: <?= $duracion->format('Y-m-d H:i:s') ?></p>

    </div>
</body>

</html>