<?php
require_once __DIR__ . '/Type.php';
require_once __DIR__ . '/../traits/Ecologic.php';

class Product extends Type {
    public $name;
    public $price;
    public $picPath;

    // traits
    use Ecologic;

    function __construct(
        string $category,
        string $size,
        string $type,
        string $typeIcon,
        string $name,
        float $price,
        string $picPath
    )
    {
        parent::__construct($category, $size, $type, $typeIcon, $name, $price, $picPath);
        $this->name = $name;
        $this->price = $price;
        $this->picPath = $picPath;

    }

    public function describeSelf() {
        return parent::describeSelf(). "<br>Nome del prodotto: " . $this->name .
        "<br> Price: " . $this->price . " &#8364";
    }
}