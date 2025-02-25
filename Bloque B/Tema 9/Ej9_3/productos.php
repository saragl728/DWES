<?php
class Producto
{
    public string $nombre;
    public float $precio;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}

//array de productos
$productos = [
    new Producto('Reloj Perripan', 5),
    new Producto('Batamanta', 13),
    new Producto('Caña de pescar', 20),
    new Producto('Martillo automático', 25),
    new Producto('Escopeta de maquillaje', 53),
    new Producto('Pez misterioso', 1),
    new Producto('Caramelo Raro', 0.5),
    new Producto('Pañuelo nu', 0.01)
];

/*Crear una lista de productos ficticios, cada uno con un nombre, precio, y un botón
para añadirlo al carrito.
Cuando el usuario haga clic en "Añadir al carrito," se añadirá el producto a la
sesión y se redirigirá a una página que muestra los productos añadidos. */

?>
<!DOCTYPE html>
<html>

<head>
    <title>Lista de productos</title>
    <link rel="stylesheet" href="./../RecursosB9/css/styles.css">
</head>

<body>
    <section class="page">
        <form method="POST">
            <ul>
                <?php foreach ($productos as $prod) { ?>
                    <li><?= $prod->nombre ?> - <?= $prod->precio ?> Cantidad: <input type="number" min="1"
                            name="cantidad"> <input type="submit" value="Añadir al carrito"></li>
                <?php } ?>

            </ul>

        </form>

    </section>

</body>

</html>