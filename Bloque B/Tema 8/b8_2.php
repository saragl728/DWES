<?php
//$fechaa;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaa = date_create_from_format("Y/m/d H:i:s", $_POST['fecha']);

    $timUnix = $fechaa->getTimestamp();
}
/*. Los usuarios ingresan las fechas en un formato específico: d/m/Y H:i:s (por
ejemplo, 16/10/2024 15:30:00 ).
. El sistema debe convertir esta fecha en un objeto DateTime utilizando la función
date_create_from_format() .
. Una vez que se ha creado el objeto DateTime , el sistema debe:
Mostrar la fecha en formato: Y-m-d H:i:s (por ejemplo, 2024-10-16
15:30:00 ).
Obtener el timestamp UNIX correspondiente a esa fecha usando el método
getTimestamp() .
Mostrar la fecha en formato legible como "16 de octubre de 2024, 1530".*/

?>
<html>

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
            <p>Fecha y hora: <?= date_format($fechaa, "Y/m/d H:i:s") ?></p>
            <p>Tiempo UNIX: <?= $timUnix ?></p>
            <p>Otro formato: </p>
        </section>
    </form>
</body>

</html>