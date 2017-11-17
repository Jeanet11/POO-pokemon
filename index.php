<?php
require_once("class/Pokemon.class.php");
require_once("class/Energie.php");
require_once("class/Dresseur.php");

$pikachu = new Pokemon();
$marisson = new Pokemon("Marisson", "plante", "Boguerisse",60, 650, 30, 5);
$grenousse = new Pokemon("Grenousse", "eau", "Croaporal", 80, 656, 20, 5);
$feunnec = new Pokemon("Feunnec","feu", "Roussil", 60, 653);
$boguerisse = new Pokemon("Boguerisse", "plante", "Blindépique", 90, 451);
$blindepique = new Pokemon("Blindépique", "plante", null, 150, 652);
$croaporal = new Pokemon("Croaporal", "eau", "Amphinobi", 80, 657);
$amphinobi = new Pokemon("Amphinobi", "eau", null, 140, 658);
$roussil = new Pokemon("Roussil", "feu", "Goupelin", 80, 654);
$goupelin = new Pokemon("Goupelin", "feu", null, 140, 655);

$feu = new Energie("feu");

$stade_de_france = new Dresseur("stade", "stade de France");
//$pokeball = new Dresseur();
var_dump($grenousse);

$marisson->attaquer($grenousse);
$marisson->attaquer($grenousse);
$marisson->attaquer($grenousse);
$marisson->attaquer($grenousse);

var_dump($marisson);
var_dump($grenousse);
// var_dump($feunnec);
// var_dump($boguerisse);
// var_dump($blindepique);
// var_dump($croaporal);
// var_dump($amphinobi);
// var_dump($roussil);
// var_dump($goupelin);
