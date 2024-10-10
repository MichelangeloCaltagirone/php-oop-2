<?php
require_once __DIR__ . '/Category.php';
class Type extends Category{
    public string $type;
    public string $typeIcon;

    function __construct(
        string $category,
        string $size,
        string $type,
        string $typeIcon
    )
    {        
        parent::__construct($category, $size, $type, $typeIcon);
        $this->type = $type;
        $this->typeIcon = $typeIcon;

    }

    public function describeSelf() {
        return parent::describeSelf(). "<br>Tipo di prodotto: " . $this->type .
        " " . $this->typeIcon;
    }
}