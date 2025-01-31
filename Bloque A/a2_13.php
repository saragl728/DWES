<?php
$stock = 25;
if ($stock >= 10) {
    $message = 'Good availability';
}
if ($stock > 0 && $stock < 10) {
    $message = 'Low stock';
}
if ($stock == 0) {
    $message = 'Out of stock';
}
?>
<?php require_once 'includes/header.php'; ?>
<h2>Chocolate</h2>
<p><?= $message ?></p>
<?php include 'includes/footer.php'; ?>

<!-- includes/header.php -->
<!DOCTYPE html>
<html>

<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <nav>
        <a href="index.php">Home</a> |
        <a href="candy.php">Candy</a> |
        <a href="about.php">About</a> |
        <a href="contact.php">Contact</a>
    </nav>

    <!-- includes/footer.php -->
    <footer>&copy; <?php echo date('Y') ?></footer>
</body>

</html>