<?php
class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}
class Account
{
    public int $number;
    public string $type;
    public float $balance;
}
$customer = new Customer();
$account = new Account();
$customer->email = 'ivy@eg.link';
$customer->forename = '';
$customer->surname = '';
$account->balance = 1000.00;
?>
<?php include 'RecursosA4/includes/header.php'; ?>
<p>Full name: <?= $customer->forename ?> <?= $customer->surname ?></p>
<p>Email: <?= $customer->email ?></p>
<p>Balance: $<?= $account->balance ?></p>
<?php include 'RecursosA4/includes/footer.php'; ?>
