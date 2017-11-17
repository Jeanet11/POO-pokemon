<?php

class Energie {

    public $type;
    public $quantite = 1;

    public function __construct($type = "feu", $quantite = 1)
    {
        $this->type = $type;

    }
  
}