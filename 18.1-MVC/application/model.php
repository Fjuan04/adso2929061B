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

    public function show($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM pokemons WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

