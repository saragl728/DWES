<?php setlocale(LC_TIME, 'es_ES.UTF-8'); ?>
<?php

$error = '';
try {
    $inicio = new DateTime($_POST['ini']);
    $final = new DateTime($_POST['fin']);
    $duracion = $inicio->diff($final);
    $error = 'Todo bien.';
} catch (Exception $e) {
    $error = $e->getMessage() . '. Al menos una de las fechas introducidas no es válida';
}
finally{
    echo($error);
}

/*Manuel Navas Damas
9:39


Manuel Navas Damas
9:40
LC_ALL
Manuel Navas Damas
9:42
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
Julia Pérez Fabregat
9:50
extension=intl
// Intento de solución a meses en Español
    $formatter = new IntlDateFormatter(
        'es_ES',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        'Europe/Madrid',
        IntlDateFormatter::GREGORIAN
    );
$msj    .= '<b>Fecha en formato legible:</b> ' . $formatter->format($fecha) . '<br>';*/

?>
<html>

<head>
    <title>Ejercicio 8-4</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <section class="page">
        <form method="POST">

            <p>Introduce la fecha y hora de inicio del evento: <input type="text" name="ini"></p>
            <p>Introduce la fecha y hora de fin del evento: <input type="text" name="fin"></p>
            <p>Duración del evento: <?= $duracion->format('%y años %m meses %d días %h horas %i minutos %s segundos') ?>
            </p>
            <input type="submit">
        </form>

    </section>

</body>

</html>