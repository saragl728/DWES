<?php
//lo pongo como una clase por si luego tengo que ampliarlo
class Producto
{
    public function __construct($name, $descripcion)
    {
        $this->name = $name;
        $this->descripcion = $descripcion;
    }
    public $name;
    public $descripcion;

}

$productos = [new Producto("Caja misteriosa", "Caja que puede tener cualquier cosa"), new Producto("Puerta mágica", "Puerta que te lleva a cualquier sitio"), new Producto("Manta", "Algo suave para cuando hace frío")];
?>
<!DOCTYPE html>
<html>
<!--1º ejercicio-->
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="Recursos B6/css/styles.css">
</head>

<body>
    <h1>Productos</h1>
    <?php foreach ($productos as $prod) { ?>
        <p><a href="product.php"><?= $prod->name ?></a></p>
    <?php } ?>
</body>

</html>