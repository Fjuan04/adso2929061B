<?php

class PokemonController extends Controller {
    public $load;
    public $model;

    public function __construct()
    {
        $this->load = new Load;
        $this->model = new Model;
        
    }
    
    public function show($id)
    {
        $pokemon = $this->model->show($id);
        return $this->load->view('show.php', $pokemon);
    }

    public function add()
    {
        $trainers = $this->model->listTrainers();
        return $this->load->view('add.php', $trainers);
    }

    public function store()
    {
        $data = [
            "name" => $_POST['name'],
            "type" => $_POST['type'],
            "strength" => $_POST['strength'],
            "staming" => $_POST['staming'],
            "speed" => $_POST['speed'],
            "accuracy" => $_POST['accuracy'],
            "trainer_id" => $_POST['trainer_id'],
            "image_url" => !empty($_POST['image_url']) ?  $_POST['image_url'] : 'images/unknown.png'
        ];

        if($this->model->store($data)){
            return header('Location: /pokemons');
        }
        
    }

    public function edit($id)
    {
        $data = [
            "pokemon" => $this->model->show($id),
            "trainers" => $this->model->listTrainers()
        ];

        return $this->load->view('edit.php', $data);
    }

    public function update($id)
    {
        $data = [
            "name" => $_POST['name'],
            "type" => $_POST['type'],
            "strength" => $_POST['strength'],
            "staming" => $_POST['staming'],
            "speed" => $_POST['speed'],
            "accuracy" => $_POST['accuracy'],
            "trainer_id" => $_POST['trainer_id'],
            "image_url" => !empty($_POST['image_url']) ?  $_POST['image_url'] : 'images/unknown.png'
        ];

        if($this->model->update($id, $data)){
            return header('Location: /pokemons');
        }
    }

    public function destroy($id)
    {
        if($this->model->destroy($id)){
            return header('Location: /pokemons');
        }
    }
}