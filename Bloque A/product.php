<?php
class Product
{
    public int $id;
    public string $producto;
    public float $price;
    public int $stock;

    public function __construct($id, $producto, $price = 10, $stock = 5)
    {
        $this->id = $id;
        $this->producto = $producto;

        //evito que ponga valores que no son posibles
        if ($price > 0)
            $this->price = $price;
        else
            $this->price = 10;

        if ($stock >= 0)
            $this->stock = $stock;
        else
            $this->stock = 5;
    }
}
