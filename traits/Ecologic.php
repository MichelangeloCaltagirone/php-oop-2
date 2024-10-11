<?php 

trait Ecologic {
    public bool $ecoFriendly;
    public array $material;

    public function isEco (){
        return $this->ecoFriendly;
    }

    public function getMaterial() {
        return $this->material;
    }
}