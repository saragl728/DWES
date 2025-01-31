<?php
$resultadoSubida = '';
$movido = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['archivo']['error'] === 0) {
        $resultadoSubida = 'La imagen se ha subido correctamente';
        $temp = $_FILES['archivo']['tmp_name'];
        $path = '/var/www/images/' . $_FILES['archivo']['name'];
        $movido = move_uploaded_file($temp, $path);


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
    <title>Ejercicio 7-2</title>
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