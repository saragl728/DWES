<?php
$usuario = $_COOKIE['usuario'] ?? null;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    setcookie('usuario', $usuario);
}

?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 9-1</title>
    <link rel="stylesheet" href="./RecursosB9/css/styles.css">
</head>

<body>
    <section class="page">
        <?php if ($usuario == null) { ?>
            <form method="POST" action="welcome.php">
                <p>Introduce tu nombre de usuario: <input type="text" name="usuario"></p>
                <input type="submit">
            </form>
        <?php } ?>
        <?php if ($usuario != null) { ?>
            <p>Bienvenido, <?= $usuario ?></p>
        <?php } ?>
    </section>

</body>

</html>