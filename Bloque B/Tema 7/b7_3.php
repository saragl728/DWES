<?php
$resultadoSubida = '';
$movido = false;
$maxTamanyo = 5242880;
$tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
$extensionesPermitidas = ['jpeg', 'jpg', 'png', 'gif'];

function crearNombreArchivo($nombreArchivo, $ruta)
{
    $nombreBase = pathinfo($nombreArchivo, PATHINFO_FILENAME);
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $nombreBase = preg_replace('/[^A-z0-9]/', '-', $nombreBase);
    $i = 0;

    while (file_exists($ruta . $nombreArchivo)) {

        $i++;
        $nombreArchivo = $nombreBase . $i . '.' . $extension;
    }
    return $nombreArchivo;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['archivo']['error'] === 0) {
        $resultadoSubida = 'La imagen se ha subido correctamente';
        $path = crearNombreArchivo($_FILES['archivo']['tmp_name'], '/var/www/images');


        if ($movido == true) {
            $resultadoSubida = "<img src='$path' alt='Nueva imagen'>";
        } else {
            $resultadoSubida = 'No se ha podido guardar la imagen';
        }
    } else {
        $resultadoSubida = 'No se ha podido subir el archivo';
    }
}

?>
<html>

<head>
    <title>Ejercicio 7-3</title>
    <style>
        * {
            padding: 3px;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #5fd;
        }

        input[type='submit'] {
            border: 3px #00f ridge;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <p>Sube un archivo: <input type="file" name="archivo" accept="image/jpeg, image/png, image/jpg" id="archivo">
        </p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    <p><?= $resultadoSubida ?></p>
</body>

</html>