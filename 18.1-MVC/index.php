<?php

// router
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);
$id = $parts[2] ?? 1;

switch ($uri){
    case '/':
        require_once 'application/mvc.php';
        break;
    
    case str_starts_with($uri, "/pokemons/$id"):
        require 'application/database.php';
        require 'application/model.php';
        require 'application/load.php';
        require 'application/controllers/controller.php';
        require 'application/controllers/PokemonController.php';

        $controller = new PokemonController;
        $controller->show($id);
}