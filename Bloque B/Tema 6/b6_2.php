<?php
    $cities = ['London' => '48 Store Street', 'Sydney' => '151 Oxford Street', 'NYC' => '1242 7th Street'];
    $city = $_GET['city'] ?? '';

    if ($city){
        $address = $cities[$city];

    }
    else{
        $address = "Please, select a city";
    }
?>
<html>
    <head>
        <title>Ejercicio 6-2</title>
        <link rel="stylesheet" href="Recursos B6/css/styles.css">
    </head>
    <body>
        <?php foreach ($cities as $key => $value) { ?>
            <a href="get-2.php?city=<?= $key?>"><?=$key ?></a>
            <?php }?>
    </body>
</html>