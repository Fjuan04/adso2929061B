<?php

$title  = '13-clone-object';
$description = " Creating a new object as a copy of an existing one.";


include 'template/header.php';

class Dragon {
    private $name;
    private $weight;

    public function __construct($name, $weight) {
        $this->name   = $name;
        $this->weight = $weight;
    }

    public function getInfoDragon() {
        return "<li> Dragon Name: {$this->name} <br>
                    Weight: {$this->weight} kg </li>";
    }
}

$dr  = new Dragon("Spyro", 3000);
$drc = clone($dr);
echo $drc->getInfoDragon();

include 'template/footer.php';