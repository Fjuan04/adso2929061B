<?php

class Model extends DataBase {
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function listPokemons(){
        $stmt = $this->db->query("SELECT * FROM pokemons");
        return $stmt->fetchAll();
    }

    public function listTrainers()
    {
        $stmt = $this->db->prepare("SELECT * FROM trainers");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function show($id)
    {
        $stmt = $this->db->prepare("SELECT p.*, t.name as tname FROM pokemons as p, trainers as t WHERE p.id = ? AND t.id = p.trainer_id");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}

