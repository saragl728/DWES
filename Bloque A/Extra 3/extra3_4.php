<?php
function generaContrasenyaAleatoria($longitud = 8)
{
    static $contGeneradas = 0;  //contador de contraseñas generadas
    srand(time());  //uso time para que la semilla sea diferente cada vez
    $pswd = ""; //contraseña que se devolverá
    //uso un array con los caracteres que la contraseña puede tener
    $caracteres = ['a', 'b', 'c', 'd', 'e', 'f', 'A', 'B', 'C', 'D', 'E', 'F', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

    for ($i = 1; $i <= $longitud; $i++) {
        $k = rand(0, count($caracteres) - 1);    //uso esto para sacar una posición aleatoria del array, pongo la longitud máxima - 1 porque en php el máximo de rand es inclusivo
        $pswd .= $k;    //uso el operador de concatenación, usar += corre el riesgo de que la contraseña no tenga la longitud que se busca
    }

    $contGeneradas++;   //incrementa el valor que cuenta las contraseñas generadas
    return $pswd;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contraseñas aleatorias</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <!--pongo contraseñas generadas de ejemplo-->
    <p><?= generaContrasenyaAleatoria(5) ?></p>
    <p><?= generaContrasenyaAleatoria(4) ?></p>
    <p><?= generaContrasenyaAleatoria() ?></p>
    <p><?= generaContrasenyaAleatoria(10) ?></p>
    <p><?= generaContrasenyaAleatoria(7) ?></p>

</body>

</html>