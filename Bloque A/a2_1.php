<?php
$name = 'Ivy';
$greeting = 'Hello';

//cambio el valor de la variable nane
$name = '';
if ($name != '') {
    $greeting = "Welcome back, $name";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
</body>

</html>