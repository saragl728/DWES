<?php
class Vehicle
{
    private string $make;
    private string $model;
    private string $licencePlate;
    private bool $avalaible;

    public function __construct($make, $model, $licensePlate, $available)
    {
        $this->make = $make;
        $this->model = $model;
        $this->licensePlate = $licensePlate;
        $this->available = $available;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getLicensePlate(): string
    {
        return $this->licencePlate;
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
    private string $name;
    private array $vehicles;

    public function __construct(string $name, array $vehicles)
    {
        $this->name = $name;
        $this->vehicles = $vehicles;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    public function listVehicles(): array
    {
        return $this->vehicles;
    }

    public function listAvailableVehicles(): array
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
    <h1><?= $parque->getName() ?></h1>
    <table>
        <th>
            <tr>Matrícula</tr>
            <tr>Marca</tr>
            <tr>Modelo</tr>
            <tr>Disponible</tr>
        </th>
        <tr>
            <?php for ($i = 0; $i < count($parque->listVehicles()); $i++) { ?>
            <tr><?= $parque->listVehicles()[$i]->getLicensePlate() ?></tr>
            <tr><?= $parque->listVehicles()[$i]->getMake() ?></tr>
            <tr><?= $parque->listVehicles()[$i]->getModel() ?></tr>
            <tr><?= $parque->listVehicles()[$i]->isAvailable() ?></tr>
        <?php } ?>
        </tr>
    </table>
</body>

</html>