<?php
declare(strict_types=1);
$librios = [['Dragón Sombrío', 14, 7], ['Sombras en Valencia', 20, 26], ['Genealogía Equina', 16, 8], ['España 1700', 17.6, 14]];

$tax = 20;

function getEstadoStock(int $stock)
{
    $umbralBajo = 8;
    if ($stock < $umbralBajo)
        return "Quedan pocas unidades";
    else
        return "Hay una cantidad aceptable";
}

function getValorTotal($precio, $cantidad)
{
    return $precio * $cantidad;
}

function getImpuestos($precio, $cantidad, $tax = 0)
{
    return $precio * $cantidad * $tax / 100;

}

?>
<!DOCTYPE html>
<html>

<head>
    <title>3.12: Librería</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Librería</h1>
    <table>
        <tr>
            <th>Libro</th>
            <th>Stock</th>
            <th>Estado stock</th>
            <th>Precio existencias</th>
            <th>Impuestos</th>
        </tr>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <tr>
                <td><?= $librios[$i][0] ?></td>
                <td><?= $librios[$i][1] ?></td>
                <td><?= getEstadoStock($librios[$i][2]) ?></td>
                <td><?= getValorTotal($librios[$i][1], $librios[$i][2]) ?></td>
                <td><?= getImpuestos($librios[$i][1], $librios[$i][2], $tax) ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>