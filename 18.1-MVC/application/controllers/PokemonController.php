<?php

class PokemonController extends Controller {
    public $load;
    public $model;

    public function __construct()
    {
        $this->load = new Load;
        $this->model = new Model;
        
    }
    
    public function show($id){
        $pokemon = $this->model->show($id);
        $this->load->view('show.php', $pokemon);
    }

}