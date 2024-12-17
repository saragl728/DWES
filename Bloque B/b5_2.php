<?php
$palabraBuscada = "el";
$contenido = "Hemos vuelto al principio. Estamos tirando muelles por el retrete por quinta vez. No sé por qué estamos haciendo esto. Nos hemos quedado sin chistes de papeleras. El grupo ha llegado al agotamiento mental después de haber recibido menciones innecesarias que incluyen preguntas estúpidas y tener que ver a gente enviar un porrón de mensajes para hacer una sola pregunta. También hay un problema de bots, con falsas promesas de Photoshop gratis, Discord Nitro o mujeres que viven cerca.";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Funciones de string</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Texto original:</h1>
    <p><?= $contenido ?></p>
    <h1>Texto en mayúsculas:</h1>
    <p><?= strtoupper($contenido) ?></p>
    <h1>Longitud del texto</h1>
    <p><?= strlen($contenido) ?></p>
    <h1>Longitud del texto sin espacios</h1>
    <p><?= strlen($contenido) ?></p>
    <h1>Cantidad de palabras</h1>
    <p><?= str_word_count($contenido) ?></p>

    <h1>Mostrar 50 primeras palabras</h1>
</body>

</html>