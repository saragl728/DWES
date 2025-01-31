<?php
function calcularAreaFigura(int|float $dimension1, int|float $dimension2, $figura = "cuadrado")
{
    $area = 0;

    $figura = strtolower($figura);  //primero lo pongo en minúsculas para que cuente cuando lo ponemos en mayúsculas

    switch ($figura) {
        case "rectángulo":
            $area = $dimension1 * $dimension2;
            break;
        case "triángulo":
            $area = $dimension2 * $dimension1 / 2;
            break;
        case "círculo":
            $area = $dimension1 * $dimension1 * pi();
            break;
            //hago que el cuadrado se calcule por defecto
        default:
        case "cuadrado":
            $area = $dimension1 * $dimension1;
    }

    return $area;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cálculo área figuras geométricas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body></body>

</html>