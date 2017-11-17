<?php

class Dresseur {
    public $nom;
    public $type = "";
    public $texte = "";
    public $regle_dresseur;

    public function __construct($nom, $type)
    {
        $this->nom = $nom;
        $this->type = $type;
    }

}