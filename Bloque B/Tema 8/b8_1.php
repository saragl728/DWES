<?php

//función para pasar un timestamp a días
function segundosDias($segundos)
{
    return round($segundos / (24 * 60 * 60));
}

$ahora = time();    //fecha actual

$tiempoInicio = strtotime("2025-11-01");    //es un timestamp
$tiempoFin = mktime(0, 0, 0, 12, 21, 2025); //es un timestamp
$iniciado = time() >= $tiempoInicio;

$mensajeEstado = "";    //dirá si el evento no ha empezado, está en curso o ha finalizado

//cambia el mensaje de estado dependiendo de la fecha
if ($ahora < $tiempoInicio) {
    //necesito sacar la diferencia de días
    $difDias = segundosDias($tiempoInicio - $ahora);
    $mensajeEstado = "El evento aún no ha empezado. Faltan <b>$difDias</b> días para su inicio.";
} else {
    if ($ahora < $tiempoFin) {
        $difDias = segundosDias($tiempoFin - $ahora);
        $mensajeEstado = "El evento está en proceso. Faltan <b>$difDias</b> para que acabe.";
    } else {
        $mensajeEstado = "El evento ha terminado";
    }
}

?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 8-1</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <section class="page">
        <p>Fecha actual: <b><?= date("d-m-Y", $ahora) ?></b></p>
        <p><?= $mensajeEstado ?></p>
        <p>Fecha de inicio del evento: <b><?= date("d-m-Y", $tiempoInicio) ?></b></p>
        <p>Fecha de finalización del evento: <b><?= date("d-m-Y", $tiempoFin) ?></b></p>
    </section>

</body>

</html>