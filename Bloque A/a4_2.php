<?php include("product.php"); ?>
<?php
//creo instancias de la clase Product
$pr1 = new Product(1, "Batamanta", 15, 12);
$pr2 = new Product(2, "Vara", 14, 4);
$pr3 = new Product(3, "Caja misteriosa", 20, 32);

//lo pongo en un array para usar un bucle luego
$prs = [$pr1, $pr2, $pr3];
?>
<!DOCTYPE html>
<html>

<head></head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <?php for ($i = 0; $i < count($prs); $i++) { ?>
            <tr>
                <td><?= $prs[$i]->id ?></td>
                <td><?= $prs[$i]->producto ?></td>
                <td><?= $prs[$i]->price ?></td>
                <td><?= $prs[$i]->stock ?></td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>