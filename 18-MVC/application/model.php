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
        $stmt = $this->db->prepare("SELECT p.*, t.name as tname, t.id as tid FROM pokemons as p, trainers as t WHERE p.id = ? AND t.id = p.trainer_id");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function store($data)
    {
        $stmt = $this->db->prepare("INSERT INTO pokemons (name, type, strength, staming, speed, accuracy, trainer_id, image_url)
        VALUES (:name, :type, :strength, :staming, :speed, :accuracy, :trainer_id, :image_url)");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':strength', $data['strength']);
        $stmt->bindParam(':staming', $data['staming']);
        $stmt->bindParam(':speed', $data['speed']);
        $stmt->bindParam(':accuracy', $data['accuracy']);
        $stmt->bindParam(':trainer_id', $data['trainer_id']);
        $stmt->bindParam(':image_url', $data['image_url']);
        
        $stmt->execute();
        return $stmt->rowCount() > 0 ? true : false;
        
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE pokemons SET name = :name, type = :type, strength = :strength, staming = :staming, speed = :speed, accuracy = :accuracy, trainer_id = :trainer_id, image_url = :image_url WHERE pokemons.id = :id");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':strength', $data['strength']);
        $stmt->bindParam(':staming', $data['staming']);
        $stmt->bindParam(':speed', $data['speed']);
        $stmt->bindParam(':accuracy', $data['accuracy']);
        $stmt->bindParam(':trainer_id', $data['trainer_id']);
        $stmt->bindParam(':image_url', $data['image_url']);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt->rowCount() > 0 ? true : false;
    }

    public function destroy($id)
    {
        $stmt = $this->db->prepare("DELETE FROM pokemons WHERE id = :id");
        $stmt->execute([':id' => $id]);

        return $stmt->rowCount() > 0 ? true : false;
    }
    
}

