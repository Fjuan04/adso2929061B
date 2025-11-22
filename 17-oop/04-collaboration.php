<?php 
$title = '04- Collaboration';
$description = "Collaboration: Objects working together by calling each other's methods.";
include 'template/header.php';

class Evolve {
    public function evolvePokemon($origin, $evolution){
        echo "<ul class='bg-[#0002] flex w-full'><li class='flex w-full justify-evenly'><span>$origin</span> <span>➡️</span> <span>$evolution</span></li></ul>";
    }
}

class Pokemon 
{
    private $origin;
    private $evolution;
    private $collaboration;
    public function __construct($origin, $evolution)
    {
        $this->origin = $origin;
        $this->evolution = $evolution;
        //collaboration
        $this->collaboration = new Evolve;
    }

    public function nextLevel(){
        $this->collaboration->evolvePokemon($this->origin, $this->evolution);
    }
}

$ev = new Pokemon('Pichu', 'Pikachu');
$ev->nextLevel();


$ev = new Pokemon('Pikachu', 'Raichu');
$ev->nextLevel();

$ev = new Pokemon('Bulbasaur', 'Ivysaur');
$ev->nextLevel();

$ev = new Pokemon('Ivysaur', 'Venusaur');
$ev->nextLevel();


include 'template/footer.php';