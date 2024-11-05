<?php
$nutrition = [
    'fat'
    => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <?php
    //actualizo los valores
    $nutrition['fat'] = 42;
    $nutrition['sugar'] = 60;
    $nutrition['salt'] = 3.5;

    //añado protein
    $nutrition['protein'] = 2.6;
    ?>
    <p>Fat:
        <?php echo $nutrition['fat']; ?>%
    </p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
    <!--Muestro el valor de protein-->
    <p>Protein: <?php echo $nutrition['protein'] ?></p>
</body>

</html>