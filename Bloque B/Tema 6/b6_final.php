<?php
$reg = ['name' => '', 'email' => '', 'telefono' => '', 'tEvento' => '', 'terminos' => false];
$errores = ['name' => '', 'email' => '', 'telefono' => '', 'tEvento' => '', 'terminos' => false];

//el teléfono tiene que tener al menos 9 dígitos

$mensajeError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reg['name'] = $_POST['name'];
    $reg['email'] = $_POST['email'];
    $reg['telefono'] = $_POST['telefono'];
    $reg['tEvento'] = $_POST['tEvento'];
    $reg['terminos'] = isset($_POST['terminos']);

    $filtros['name']['filter'] = [FILTER_VALIDATE_REGEXP, FILTER_SANITIZE_FULL_SPECIAL_CHARS];
    $filtros['name']['options']['regexp'] = '/[a-Z]{2,50}/';
    $filtros['email']['filter'] = [FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_FULL_SPECIAL_CHARS];
    $filtros['telefono']['filter'] = FILTER_VALIDATE_REGEXP;
    $filtros['telefono']['options']['regexp'] = '/[0-9]{9,}/';
    $filtros['terminos']['filter'] = FILTER_VALIDATE_BOOLEAN;
}

//tengo que hacer que reg recoja todo
//$reg = filter_var_array($reg, $filtros);
$reg = filter_input_array(INPUT_POST, $filtros);
$mensajeError = implode($errores);

?>
<html>

<head>
    <title>Formulario eventos</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #cfc;
        }

        * {
            margin: 3px;
        }
    </style>
</head>

<body>
    <h1>Formulario de registro de evento</h1>
    <form action="b6_final.php" method="POST">
        Nombre: <input type="text" name="name" required><br>
        E-mail: <input type="text" name="email" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        Tipo de evento:
        <input type="radio" name="tEvento" value="Online">Online
        <input type="radio" name="tEvento" value="Presencial">Presencial<br>
        <input type="checkbox" name="terminos"> Acepto los términos y condiciones<br>
        <!--<input type="submit">-->
        <button type="submit">Enviar</button>
    </form>
    <p id="mensEnviado"><?php var_dump($reg) ?></p>
</body>

</html>