<?php
$username = 'Ivy';
$user_array = ['name' => 'Ivy', 'age' => 24, 'active' => true];

class User
{
    public $name;
    public $age;
    public $active;
    public function __construct($name, $age, $active)
    {
        $this->name = $name;
        $this->age = $age;
        $this->active = $active;
    }
}

$user_object = new User('Ivy', 24, true);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Intro funciones formateadas PHP</title>
</head>

<body>
    <pre>
            <p>Scalar: <?php var_dump($username); ?></p>
            <p>Array: <?php var_dump($user_array); ?></p>
            <p>Object: <?php var_dump($user_object); ?></p>
        </pre>
</body>

</html>