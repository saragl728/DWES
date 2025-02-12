<?php
//$fechaa;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fechaa = date_create_from_format("d/m/Y H:i:s", $_POST['fecha']);
    $timUnix = $fechaa->getTimestamp();
}

?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 8-2</title>
    <link rel="stylesheet" href="./RecursosB8/css/styles.css">
</head>

<body>
    <form method="POST">
        <section class="page">
            <p>Introduce la fecha del evento en formato d/m/Y H:i:s: <input type="text" name="fecha"></p>
            <p><input type="submit"></p>
        </section>

        <section class="page">
            <p>Tiempo UNIX: <?= $timUnix ?></p>
            <p>Fecha y hora: <?= $fechaa->format('Y-m-d H:i:s') ?></p>
            <p>Otro formato: </p>
        </section>
    </form>
</body>

</html>