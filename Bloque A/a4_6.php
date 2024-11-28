<?php
class Vehicle
{
    public string $make;
    public string $model;
    public string $licencePlate;
    private bool $avalaible;

    public function __construct($make, $model, $licensePlate, $available)
    {
        $this->make = $make;
        $this->model = $model;
        $this->licensePlate = $licensePlate;
        $this->available = $available;
    }

    public function getDetails()
    {
        $detalles = "Marca: $this->make\nModelo: $this->model\nMatrícula: $this->licencePlate";

        return $detalles;
    }

    public function isAvalaible()
    {
        return $this->avalaible;
    }
}

class Fleet
{
    public string $name;
    private array $vehicles;

    public function __construct($name, $vehicles)
    {
        $this->name = $name;
        $this->vehicles = $vehicles;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    public function listVehicles()
    {
        return $this->vehicles;
    }

    public function listAvailableVehicles()
    {
        $arrai = [];
        foreach ($this->vehicles as $vehicle) {
            //si está disponible, lo añado al array
            if ($vehicle->isAvailable()) {
                $arrai[] = $vehicle;
            }
        }
        return $arrai;
    }
}
//uso un array para los vehículos
$vehiculos = [new Vehicle("Volk", "Aircalibur", 'CO2345ZS', true), new Vehicle("Bolganona", "Luna", 'SE1234QC', true), new Vehicle("Capris", "Ignis", 'BA5487KL', false)];

$parque = new Fleet('Flota Powell', $vehiculos);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio final: Parque de vehículos</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        th,
        td {
            border: #111 solid 2px;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1><?= $parque->name ?></h1>
    <table>
        <th>
            <tr>Matrícula</tr>
            <tr>Marca</tr>
            <tr>Modelo</tr>
            <tr>Disponible</tr>
        </th>
        <tr>
            <?php for ($i = 0; $i < count($parque->listVehicles()); $i++) { ?>
            <tr><?=$parque->listVehicles()[$i]->licencePlate?></tr>
            <tr><?=$parque->listVehicles()[$i]->make?></tr>
            <tr><?=$parque->listVehicles()[$i]->model?></tr>
            <tr><?=$parque->listVehicles()[$i]->isAvailable()?></tr>
        <?php } ?>
        </tr>
    </table>
</body>

</html>