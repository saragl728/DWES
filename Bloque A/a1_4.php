<?php
$best_sellers = ['Chocolate', 'Mints', 'Fudge',
'Bubble gum', 'Toffee', 'Jelly beans',];
?>
<!DOCTYPE html>
<html>
<head>
<title>Indexed Arrays</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Best Sellers</h2>
<?php
//1: divido el array en dos
$arr1 = [$best_sellers[0], $best_sellers[1], $best_sellers[2]]  //pongo los elementos hasta 'Fudge'
$arr1 = "Frogurt";  //añado un elemento
$arr2 = array_slice($best_sellers, 3);  //otro array que usaremos después
$best_sellers = array_merge($arr1, $arr2);
?>
<ul>
<li><?php echo $best_sellers[0]; ?></li>
<li><?php echo $best_sellers[1]; ?></li>
<li><?php echo $best_sellers[2]; ?></li>
<!--añado el 4º y 5º elemento-->
<li><?php echo $best_sellers[3]; ?></li>
<li><?php echo $best_sellers[4]; ?></li>
</ul>
</body>
</html>
