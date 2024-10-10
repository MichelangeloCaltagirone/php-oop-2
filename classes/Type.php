<?php
require_once __DIR__ . '/Category.php';
class Type extends Category{
    public string $type;

    function __construct(
        string $category,
        string $size,
        string $type
    )
    {        
        parent::__construct($category, $size, $type);
        $this->type = $type;

    }
}