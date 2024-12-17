<?php
declare(strict_types=1);
class Account
{
    private int $number;
    private string $owner;
    private string $type;
    protected float $balance;
    public function __construct(int $number, string $type)
    {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(string $owner)
    {
        $this->owner = $owner;
    }
    public function deposit(float $amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function withdraw(float $amount)
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new Account(20148896, 'Savings', 80);
$account->setOwner('Tipo de incógnito');
?>
<?php include 'RecursosA4/includes/header.php'; ?>
<h2>Account type: <?= $account->getType() ?></h2>
<h2>Account's owner: <?= $account->getOwner() ?></h2>
<p>Previous balance: <?= $account->balance ?></p>
<p>New balance: <?= $account->deposit(35) ?></p>
<?php include 'RecursosA4/includes/footer.php'; ?>