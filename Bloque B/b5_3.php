<?php
//variables
$nombre = "";
$correo = "";
$mensaje = "";

$palabrasProhibidas = ['maric', 'fagg', 'nigg'];   //array que se usará después

//procesamiento de variables
$nombre = trim($nombre);
$correo = trim($correo);
$mensaje = trim($mensaje);

$correo = strtolower($correo);

//censura de palabras prohibidas
for ($i = 0; $i < count($palabrasProhibidas); $i++) {
    $mensaje = str_ireplace($palabrasProhibidas[$i], "****", $mensaje); //uso la versión case insensitive para no comprobar versiones de las palabras prohibidas
}

$mensaje = str_ireplace("urgente", "Prioridad alta", $mensaje);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reemplazo de caracteres</title>
</head>

<body>
    <p><?php echo $nombre?></p>
    <p><?php echo $correo ?></p>
    <p><?php echo $mensaje ?></p>
</body>

</html>