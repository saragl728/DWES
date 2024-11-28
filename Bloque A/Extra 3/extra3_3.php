<?php
function generarListaHtml($arrai, $ordenada = true)
{
    $listaGenerada = "";
    //por defecto, será una lista ordenada
    $aux = "";  //usaré esto para poner los elementos
    //convierto el array en una lista
    for ($i = 0; $i < count($arrai); $i++) {
        //añado saltos de línea
        $aux += "<li>$arrai[$i]</li>\n";
    }

    if ($ordenada) {
        $listaGenerada = "<ol>\n$aux\n</ol>";
    } else {
        $listaGenerada = "<ul>\n$aux\n</ul>";
    }
    return $listaGenerada;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Generar lista HTML</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body></body>

</html>