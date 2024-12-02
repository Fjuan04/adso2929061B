<?php

namespace electric;

class Pokemon {
    private $name;
    private $color;

    public function __construct($n, $c) {
        $this->name = $n;
        $this->color = $c;
    }

    public function getinfoPokemon() {
        return "<li class='text-white'>".$this->name." | ".$this->color."</li>";
    }
}

?>