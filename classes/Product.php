<?php
require_once __DIR__ . '/Category.php';

class Product {
    public $name;
    public $price;
    public $picPath;

    function __construct(
        string $name,
        float $price,
        string $picPath
    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->picPath = $picPath;

    }
}