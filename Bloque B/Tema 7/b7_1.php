<?php
$resultadoSubida = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['archivo']['error'] === 0) {
        $resultadoSubida = 'La imagen se ha subido correctamente';
    } else {
        $resultadoSubida = 'No se ha podido subir el archivo';
    }

}

?>
<html>

<head>
    <title>Ejercicio 7-1</title>
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