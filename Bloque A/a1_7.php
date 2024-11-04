<?php
$name
= 'Ivy';
$favorites = ['Chocolate', 'Toffee', 'Fudge',];
?>
<!DOCTYPE html>
<html>
<head>
<title>Echo Shorthand</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<?php
    $name = 'Sara';  //cambio el nombre
    array_unshift($favorites, 'Frogurt');   //añado un elemento al principio del array
?>
<h2>Welcome <?= $name ?></h2>
<p>Your favorite type of candy is:
<?= $favorites[0] ?>.</p>
</body>
</html>
