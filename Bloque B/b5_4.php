<?php
$text = "Estoy probando el multibyte. 私のなまえわサラです. En fin, que si quiere bolsa.";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadenas multibyte</title>
</head>

<body>
    <p>Character count using <code>strlen()</code>: <?= strlen($text) ?></p>
    <p>Character count using <code>mb_strlen()</code>: <?= mb_strlen($text) ?></p>
    <p>First match of 'En' <code>strpos()</code>: <?= strpos($text, 'En') ?></p>
    <p>First match of 'En' <code>mb_strpos()</code>: <?= mb_strpos($text, 'En') ?></p>
</body>

</html>