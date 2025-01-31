<?php
$nombre = 'Roca';
$saludo = "Hola, $nombre";
$precioInicial = 30;
$porcentajeDesc = 0.15;
$meses = 12;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Gimnasio</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            border: 2px solid #000;
        }
    </style>
</head>

<body>
    <p><?= $saludo ?></p>
    <h1>Oferta gimnasio</h1>
    <table>
        <tr>
            <th>Meses</th>
            <th>Precio</th>
        </tr>
        <?php for ($i = 0; $i < $meses; $i++) { ?>
            <tr>
                <td><?= $meses + 1 ?></td>
                <td><? $meses < 4 ? $precioInicial * ($meses + 1) : $precioInicial * (1 - $porcentajeDesc) * ($meses + 1) ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>