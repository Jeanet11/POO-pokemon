<?php
class Pokemon {

	public  $nom = "";
	public  $type = "";
	public  $pv = 0;
	public  $niveau = 0;
	public  $evolution = "";
	public  $extension = "";
	public  $numero = 0;
	public  $degats = 0;
	public 	$defense = 0;


	public function __construct($nom="Pikachu", $type="foudre", $evolution = "Raichu", $pv = 60, $numero = 650, $degats = 1, $defense = 1)
	{
		$this->nom = $nom;
		$this->type = $type;
		$this->evolution = $evolution;
		$this->pv = $pv;
		$this->numero = $numero;
		$this->degats = $degats;
		$this->defense = $defense;
	}

	public function attaquer($cible) {
		echo $this->nom." attaque ".$cible->nom."<br>";
		echo $cible->nom." a subi ".$this->degats." de dommage. <br>";
		
		$cible->pv = $cible->pv - $this->degats + $cible->defense;
		if($cible->pv <= 0){
			echo $cible->nom." est KO.";
		}
		else {
			echo $cible->nom." n'a plus que ". $cible->pv." de vie.<br>";
		}
	}

}

