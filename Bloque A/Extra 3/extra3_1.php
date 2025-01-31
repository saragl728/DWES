<?php
function creaTablaMultiplicar($numero)
{
    echo "<table>";
    echo "<tr>";
    echo "<th>a</th>";
    echo "<th>b</th>";
    echo "<th>a*b</th>";
    echo "</tr>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$i*$numero</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Crear tabla de multiplicar</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

</body>

</html>