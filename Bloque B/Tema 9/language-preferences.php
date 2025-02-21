<?php
$idioma = $_COOKIE['idioma'] ?? null;
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idioma = $_POST['idioma'];
    setcookie('idioma', $idioma, time() + 3600 * 24 * 30);
}

switch ($idioma) {
    case "español":
        $mensaje = "Bienvenido";
        break;
    case "english":
        $mensaje = "Welcome";
        break;
}


?>
<!DOCTYPE html>

<head>
    <title>Ejercicio 9-2</title>
    <link rel="stylesheet" href="./RecursosB9/css/styles.css">
</head>

<body>
    <section class="page">
        <?php if ($idioma == null) { ?>
            <form method="POST" action="language-preferences.php">
                <h1>Elige un idioma/Choose a language</h1>
                <p><input type="radio" id="esp" name="idioma" value="español">Español</p>
                <p><input type="radio" id="eng" name="idioma" value="english">English</p>
                <input type="submit">
            </form>
        <?php } ?>
        <?php if ($idioma != null) { ?>
            <h1><?= $mensaje ?></h1>
        <?php } ?>
    </section>

</body>

</html>