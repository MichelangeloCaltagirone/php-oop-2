<?php


class Category {
    public string $category;
    public string $size;

    function __construct(
        string $category,
        string $size
    )
    {        
        $this->category = $category;
        $this->size = $size;
    }
}