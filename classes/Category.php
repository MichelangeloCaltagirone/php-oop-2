<?php

require_once __DIR__ .'/Product.php';

class Category extends Product{
    public string $category;
    public string $size;

    function __construct(
        string $name,
        float $price,
        string $picPath,
        string $category,
        string $size
    )
    {
        parent::__construct($name, $price, $picPath, $category, $size);
        
        $this->category = $category;
        $this->size = $size;

    }
}