<?php
require_once __DIR__ . '/Type.php';

class Product extends Type {
    public $name;
    public $price;
    public $picPath;

    function __construct(
        string $category,
        string $size,
        string $type,
        string $name,
        float $price,
        string $picPath
    )
    {
        parent::__construct($category, $size, $type, $name, $price, $picPath);
        $this->name = $name;
        $this->price = $price;
        $this->picPath = $picPath;

    }
}