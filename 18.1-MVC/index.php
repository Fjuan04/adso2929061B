<?php

// router
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);
$id = $parts[2] ?? 1;
$method = $_SERVER['REQUEST_METHOD'];
require_once 'application/mvc.php';

switch ($uri){
    case str_starts_with($uri, '/pokemons/create'):
        $controller = new PokemonController;
        $controller->add();
        break;

    case filter_var($id, FILTER_VALIDATE_INT) !== false && str_starts_with($uri, "/pokemons/$id"):

        $controller = new PokemonController;
        $controller->show($id);
        break;

    default:
        new Controller;
    
}