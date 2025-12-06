<?php

// router
$uri = $_SERVER['REQUEST_URI'];

switch ($uri){
    case '/':
        require_once 'application/mvc.php';
        break;
    
    case str_starts_with($uri, '/pokemons/'):
        require 'application/database.php';
        require 'application/model.php';
        require 'application/load.php';
        require 'application/controllers/controller.php';
        require 'application/controllers/PokemonController.php';

        $controller = new PokemonController;
        $controller->show('2');
}