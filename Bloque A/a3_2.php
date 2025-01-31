<?php
function create_logo()
{
    return 'img src="img/logo.png" alt="Logo" />';
}

function create_copyright_notice()
{
    $year = date('Y');
    $message = '&copy;' . $year . ' The Candy Store';   //añado el nombre de la empresa al mensaje
    return $message;
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1><?= create_logo() ?>The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to the Candy Store</h2>
    </article>
    <footer>
        <?= create_logo() ?>
        <?= create_copyright_notice() ?>
    </footer>
</body>

</html>