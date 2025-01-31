<?php
$resultadoSubida = '';
$movido = false;
const anchoMax = 200;
const altMax = 200;

function redimiensionar($origen, $nuevaRuta)
{
    $datoImag = getimagesize($origen);
    $anchOrig = $datoImag[0];
    $altoOrig = $datoImag[1];

    $ratio = $anchOrig / $altoOrig;

    $tipoImag = $datoImag['mime'];

    //calculo los nuevos anchos y altos
    if ($anchOrig > $altoOrig) {
        $nuevoAncho = anchoMax;
        $nuevaAlt = altMax / $ratio;
    } else {
        $nuevaAlt = altMax;
        $nuevoAncho = anchoMax * $ratio;
    }

    switch ($tipoImag) {
        case 'image/gif':
            $or = imagecreatefromgif($origen);
            break;
        case 'image/jpeg':
            $or = imagecreatefromjpeg($origen);
            break;
        case 'image/png':
            $or = imagecreatefrompng($origen);
            break;
    }

    $nueva = imagecreatetruecolor($nuevoAncho, $nuevaAlt);
    imagecopyresampled($nueva, $or, 0, 0, 0, 0, $nuevoAncho, $nuevaAlt, $anchOrig, $altoOrig);


    switch ($tipoImag) {
        case 'image/gif':
            $resultado = imagegif($nueva, $nuevaRuta);
            break;
        case 'image/jpeg':
            $resultado = imagejpeg($nueva, $nuevaRuta);
            break;
        case 'image/png':
            $resultado = imagepng($nueva, $nuevaRuta);
            break;
    }

    return $resultado;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['archivo']['error'] === 0) {
        //necesito las carpetas /uploads y /uploads/thumbs
        $movido = move_uploaded_file($_FILES['archivo']['tmp_name'], '/var/www/uploads');
        //$thumbpath
        /*$redimensionado = redimiensionar('', '');
        $resultadoSubida = $redimensionado;*/

    } else {
        $resultadoSubida = 'No se ha podido subir el archivo';
    }
}

?>
<html>

<head>
    <title>Ejercicio 7-4</title>
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