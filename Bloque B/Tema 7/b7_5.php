<?php

$resultadoSubida = '';
$movido = false;
const anchoMax = 200;
const altMax = 200;

$upload_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
$max_size = 5242880;
$allowed_types = ['image/jpeg', 'image/png', 'image/gif',];
$allowed_exts = ['jpeg', 'jpg', 'png', 'gif',];

function create_thumbnail($source, $thumbpath)
{
    $image = new Imagick($source);                        // Object to represent image
    $image->thumbnailImage(200, 200, true);               // Create thumbnail
    $image->writeImage($thumbpath);                       // Save file
    return true;                                          // Return true to show success
}

function create_filename($filename, $upload_path)              // Function to make filename
{
    $basename = pathinfo($filename, PATHINFO_FILENAME);      // Get basename
    $extension = pathinfo($filename, PATHINFO_EXTENSION);     // Get extension
    $basename = preg_replace('/[^A-z0-9]/', '-', $basename); // Clean basename
    $filename = $basename . '.' . $extension;                // Add extension to clean basename
    $i = 0;                                           // Counter
    while (file_exists($upload_path . $filename)) {            // If file exists
        $i++;                                    // Update counter 
        $filename = $basename . $i . '.' . $extension;         // New filepath
    }
    return $filename;                                          // Return filename
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['archivo']['error'] == 0) {
        //necesito las carpetas /uploads y /uploads/thumbs

        $filename = create_filename($_FILES['image']['name'], $upload_path);
        $destination = $upload_path . $filename;
        $thumbpath = $upload_path . 'thumb_' . $filename;
        $resized = create_thumbnail($destination, $thumbpath);

    } else {
        $resultadoSubida = 'No se ha podido subir el archivo';
    }
}

?>
<html>

<head>
    <title>Ejercicio 7-5</title>
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