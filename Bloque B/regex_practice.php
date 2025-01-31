<?php
$data = [
    "john.doe@example.com",
    "jane-doe@website.com",
    "invalid-email@com",
    "123-456-7890",
    "987.654.3210",
    "http://www.example.com",
    "https://site.org/path?query=string",
    "not-a-url"
];

$numeros = [];
foreach ($data as $datos) {
    if (preg_match($datos, "/[0-9]/") == 1) {
        array_push($numeros, $datos);
    }
}

?>