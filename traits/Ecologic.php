<?php

use function PHPSTORM_META\type;

trait Ecologic {
    public bool $ecoFriendly;
    public array $material;

    public function isEco (){
        return $this->ecoFriendly;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function setEcoFriendly($eco){
        if (is_bool($eco)) {
            $this->ecoFriendly = $eco;
        } else {
            throw new InvalidArgumentException("ecoFriendly must be bool ouyea funziona");
        }
    }
}