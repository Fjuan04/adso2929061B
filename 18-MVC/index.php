<?php

// router
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);
$id = $parts[2] ?? 1;
$method = $_SERVER['REQUEST_METHOD'];

require_once 'application/mvc.php';
$controller = new PokemonController;

switch ($uri){
    //crear
    case str_starts_with($uri, '/pokemons/create'):
        $controller->add();
        break;
    
    case str_starts_with($uri, '/pokemons/store'):
        $controller->store();
        break;
    
    //editar
    case filter_var($id, FILTER_VALIDATE_INT) !== false && str_starts_with($uri, "/pokemons/$id/edit"):
        $controller->edit($id);
        break;

    case filter_var($id, FILTER_VALIDATE_INT) !== false && str_starts_with($uri, "/pokemons/$id/update"):
        $controller->update($id);
        break;

    //borrar 
    case filter_var($id, FILTER_VALIDATE_INT) !== false && str_starts_with($uri, "/pokemons/$id/delete") && $method == 'POST':
        $controller->destroy($id);
        break;
    //mostrar
    case filter_var($id, FILTER_VALIDATE_INT) !== false && str_starts_with($uri, "/pokemons/$id"):

        $controller->show($id);
        break;

    default:
        new Controller;
    
}