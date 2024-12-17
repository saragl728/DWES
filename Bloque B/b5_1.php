<?php
//creo una variable que usaremos después
$cadena = "Día 42: La reescribición de contenido para ajustarlo a arquetipos modernos. Una tendencia que se ha visto es reimaginar diseño de personajes y de videojuegos de forma que sea como contenido más moderno. Esto se suele hacer sin entender por qué funciona en primer lugar. Un caso curioso es el de querer que dos juegos en el que el que va segundo en orden cronológico salió primero se rehagan como un solo juego.";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Funciones integradas de strings</title>
</head>

<body>
    <p>Texto original: <?= $cadena ?></p>
    <p>Texto en mayúsculas: <?= strtoupper($cadena) ?></p>
    <p>Texto con la primera letra de cada palabra en mayúsculas: <?= ucwords($cadena) ?></p>
    <p>Longitud del texto en caracteres: <?= strlen($cadena) ?></p>
    <p>Cantidad de palabras: <?=str_word_count($cadena)?></p>
</body>

</html>