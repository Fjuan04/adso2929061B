<?php

$title  = '18-namespace';
$descripcion = "Encapsulates items to avoid name conflicts between code.";


include_once '../template/headerL2.php';

include 'electric/Pokemon.php';
include 'fire/Pokemon.php';
include 'water/Pokemon.php';

use \electric\Pokemon as Pke;
use \fire\Pokemon as Pkf;
use \water\Pokemon as Pkw;

$pk = new Pke('Pikachu', 'Yellow');
echo $pk->getinfoPokemon();

$pk = new Pkf('Charmander', 'Orange');
echo $pk->getinfoPokemon();

$pk = new Pkw('Squirtle', 'Aqua');
echo $pk->getinfoPokemon();

include '../template/footer.php';