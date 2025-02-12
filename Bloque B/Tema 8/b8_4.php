<?php setlocale(LC_TIME, 'es_ES.UTF-8'); ?>
<?php

try {
    $inicio = new DateTime($_POST['ini']);
    $final = new DateTime($_POST['fin']);
    $duracion = $inicio->diff($final);
} catch (Exception $e) {
}


?>
<!DOCTYPE html>

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